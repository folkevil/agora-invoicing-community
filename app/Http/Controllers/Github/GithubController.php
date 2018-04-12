<?php

namespace App\Http\Controllers\Github;

use App\Http\Controllers\Controller;
use App\Model\Github\Github;
use App\Model\Product\Subscription;
use Auth;
use Bugsnag;
use Exception;
use Illuminate\Http\Request;

class GithubController extends Controller
{
    public $github_api;
    public $client_id;
    public $client_secret;
    public $github;

    public function __construct()
    {
        $this->middleware('auth', ['except' => 'getlatestReleaseForUpdate']);

        $github_controller = new GithubApiController();
        $this->github_api = $github_controller;

        $model = new Github();
        $this->github = $model->firstOrFail();

        $this->client_id = $this->github->client_id;
        $this->client_secret = $this->github->client_secret;
    }

    /**
     * Authenticate a user entirly.
     *
     * @return type
     */
    public function authenticate()
    {
        try {
            $url = 'https://api.github.com/user';
            $data = ['bio' => 'This is my bio'];
            $data_string = json_encode($data);
            $auth = $this->github_api->postCurl($url, $data_string);
            dd($auth);

            return $auth;
        } catch (Exception $ex) {
            return redirect('/')->with('fails', $ex->getMessage());
        }
    }

    public function createNewAuth($note)
    {
        try {
            $url = 'https://api.github.com/authorizations';
            $data = ['note' => $note];
            $data_string = json_encode($data);
            //dd($data_string);
            $auth = $this->github_api->postCurl($url, $data_string);

            return $auth;
        } catch (Exception $ex) {
            return redirect('/')->with('fails', $ex->getMessage());
        }
    }

    public function getAllAuth()
    {
        try {
            $url = 'https://api.github.com/authorizations';
            $all = $this->github_api->getCurl($url);

            return $all;
        } catch (Exception $ex) {
            return redirect('/')->with('fails', $ex->getMessage());
        }
    }

    public function getAuthById($id)
    {
        try {
            $url = "https://api.github.com/authorizations/$id";
            $auth = $this->github_api->getCurl($url);

            return $auth;
        } catch (Exception $ex) {
            return redirect('/')->with('fails', $ex->getMessage());
        }
    }

    /**
     * Authenticate a user for a particular application.
     *
     * @return type
     */
    public function authForSpecificApp()
    {
        try {
            $url = "https://api.github.com/authorizations/clients/$this->client_id";
            $data = ['client_secret' => "$this->client_secret"];
            $data_string = json_encode($data);
            $method = 'PUT';
            $auth = $this->github_api->postCurl($url, $data_string, $method);
            //dd($auth['hashed_token']);
            return $auth['hashed_token'];
            //dd($auth);
        } catch (Exception $ex) {
            return redirect('/')->with('fails', $ex->getMessage());
        }
    }

    /**
     * List all release.
     *
     * @return type
     */
    public function listRepositories($owner, $repo, $order_id)
    {
        try {
            $releases = $this->downloadLink($owner, $repo, $order_id);
            if (array_key_exists('Location', $releases)) {
                $release = $releases['Location'];
            } else {
                $release = $this->latestRelese($owner, $repo);
            }

            return $release;
            //echo "Your download will begin in a moment. If it doesn't, <a href=$release>Click here to download</a>";
        } catch (Exception $ex) {
            dd($ex);

            return redirect('/')->with('fails', $ex->getMessage());
        }
    }

    public function listRepositoriesAdmin($owner, $repo)
    {
        try {
            $releases = $this->downloadLinkAdmin($owner, $repo);
            if (array_key_exists('Location', $releases)) {
                $release = $releases['Location'];
            } else {
                $release = $this->latestRelese($owner, $repo);
                //dd($release);
            }
            //            dd($release);
            return $release;

            //echo "Your download will begin in a moment. If it doesn't, <a href=$release>Click here to download</a>";
        } catch (Exception $ex) {
            dd($ex);

            return redirect('/')->with('fails', $ex->getMessage());
        }
    }

    public function latestRelese($owner, $repo)
    {
        try {
            $url = "https://api.github.com/repos/$owner/$repo/releases/latest";
            $release = $this->github_api->getCurl($url);

            return $release;
        } catch (Exception $ex) {
            //dd($ex);
            return redirect('/')->with('fails', $ex->getMessage());
        }
    }

    /**
     * List only one release by tag.
     *
     * @param Request $request
     *
     * @return type
     */
    public function getReleaseByTag($owner, $repo)
    {
        try {
            $tag = \Input::get('tag');
            $all_releases = $this->listRepositories($owner, $repo);

            $this->download($result['header']['Location']);
            if ($tag) {
                foreach ($all_releases as $key => $release) {
                    //dd($release);
                    if (in_array($tag, $release)) {
                        $version[$tag] = $this->getReleaseById($release['id']);
                    }
                }
            } else {
                $version[0] = $all_releases[0];
            }
            //            dd($version);
            //execute download

            if ($this->download($version) == 'success') {
                return 'success';
            }
            //return redirect()->back()->with('success', \Lang::get('message.downloaded-successfully'));
        } catch (Exception $ex) {
            //dd($ex);
            return redirect('/')->with('fails', $ex->getMessage());
        }
    }

    /**
     * List only one release by id.
     *
     * @param type $id
     *
     * @return type
     */
    public function getReleaseById($id)
    {
        try {
            $url = "https://api.github.com/repos/ladybirdweb/faveo-helpdesk/releases/$id";
            $releaseid = $this->github_api->getCurl($url);

            return $releaseid;
        } catch (Exception $ex) {
            return redirect('/')->with('fails', $ex->getMessage());
        }
    }

    /**
     * Get the count of download of the release.
     *
     * @return array||redirect
     */
    public function getDownloadCount()
    {
        try {
            $url = 'https://api.github.com/repos/ladybirdweb/faveo-helpdesk/downloads';
            $downloads = $this->github_api->getCurl($url);

            return $downloads;
        } catch (Exception $ex) {
            return redirect('/')->with('fails', $ex->getMessage());
        }
    }

    /**
     * @param type $release
     *
     * @return type .zip file
     */
    public function download($release)
    {
        try {
            //dd($release);
            echo "<form action=$release method=get name=download>";
            echo '</form>';
            echo"<script language='javascript'>document.download.submit();</script>";

            //return "success";
        } catch (Exception $ex) {
            return redirect('/')->with('fails', $ex->getMessage());
        }
    }

    /**
     * get the settings page for github.
     *
     * @return view
     */
    public function getSettings()
    {
        try {
            $model = $this->github;

            return view('themes.default1.github.settings', compact('model'));
        } catch (Exception $ex) {
            return redirect('/')->with('fails', $ex->getMessage());
        }
    }

    public function postSettings(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        try {
            $this->github->fill($request->input())->save();

            return redirect()->back()->with('success', \Lang::get('message.updated-successfully'));
        } catch (Exception $ex) {
            return redirect()->back()->with('fails', $ex->getMessage());
        }
    }

    /**
     * Github Downoload for Clients.
     *
     * @param type $owner
     * @param type $repo
     * @param type $order_id
     *
     * @return type
     */
    public function downloadLink($owner, $repo, $order_id)
    {
        try {
            // $url = "https://api.github.com/repos/$owner/$repo/releases";
            $url = "https://api.github.com/repos/$owner/$repo/zipball/master";
            //For helpdesk-community
            if ($repo == 'faveo-helpdesk') {
                return $array = ['Location' => $url];
            }
            //For servicedesk-community
            if ($repo == 'faveo-servicedesk-community') {
                return $array = ['Location' => $url];
            }

            $order_end_date = Subscription::where('order_id', '=', $order_id)->select('ends_at')->first();
            $url = "https://api.github.com/repos/$owner/$repo/releases";

            $link = $this->github_api->getCurl1($url);

            foreach ($link['body'] as $key => $value) {
                if (strtotime($value['created_at']) < strtotime($order_end_date->ends_at)) {
                    $ver[] = $value['tag_name'];
                }
            }
            //For Satellite Helpdesk
            if ($repo == 'faveo-satellite-helpdesk-advance') {
                $url = 'https://api.github.com/repos/ladybirdweb/faveo-satellite-helpdesk-advance/zipball/'.$ver[0];
            }

            //For Helpdesk Advanced
            if ($repo == 'Faveo-Helpdesk-Pro') {
                $url = 'https://api.github.com/repos/ladybirdweb/Faveo-Helpdesk-Pro/zipball/'.$ver[0];
            }

            $link = $this->github_api->getCurl1($url);

            return $link['header'];
        } catch (Exception $ex) {
            dd($ex->getline());
            Bugsnag::notifyException($ex);

            return redirect()->back()->with('fails', $ex->getMessage());
        }
    }

    //Github Download for Admin
    public function downloadLinkAdmin($owner, $repo)
    {
        try {
            $url = "https://api.github.com/repos/$owner/$repo/zipball/master";
            if ($repo == 'faveo-helpdesk') {
                return $array = ['Location' => $url];
            }
            $link = $this->github_api->getCurl1($url);

            return $link['header'];
        } catch (Exception $ex) {
            dd($ex);

            return redirect()->back()->with('fails', $ex->getMessage());
        }
    }

    public function findVersion($owner, $repo)
    {
        try {
            $release = $this->latestRelese($owner, $repo);
            if (array_key_exists('tag_name', $release)) {
                return $release['tag_name'];
            }
        } catch (Exception $ex) {
            // dd($ex);

            return redirect()->back()->with('fails', $ex->getMessage());
        }
    }

    public function getlatestReleaseForUpdate()
    {
        $name = \Input::get('name');
        $product = \App\Model\Product\Product::where('name', $name)->first();
        $owner = $product->github_owner;
        $repo = $product->github_repository;
        $release = $this->latestRelese($owner, $repo);

        return json_encode($release);
    }
}
