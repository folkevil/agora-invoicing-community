<?php

use Illuminate\Database\Seeder;
use App\Model\Common\State;

class StateSubdivision extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \DB::table('states_subdivisions')->truncate();
        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        State::create( [
'state_subdivision_id'=>12254,
'country_code_char2'=>'AF',
'country_code_char3'=>'AFG',
'state_subdivision_name'=>'Zabol [Zabul]',
'state_subdivision_alternate_names'=>'Zabol, Zabul, Zābol',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AF-ZAB'
] );


			
State::create( [
'state_subdivision_id'=>12255,
'country_code_char2'=>'AF',
'country_code_char3'=>'AFG',
'state_subdivision_name'=>'Oruzgan [Uruzgan]',
'state_subdivision_alternate_names'=>'Oruzgan, Oruzghan, Orūzghān, Uruzgan, Uruzghan, Urūzghān',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AF-ORU'
] );


			
State::create( [
'state_subdivision_id'=>12256,
'country_code_char2'=>'AF',
'country_code_char3'=>'AFG',
'state_subdivision_name'=>'Kondoz [Kunduz]',
'state_subdivision_alternate_names'=>'Kondoz, Kondūz, Kūnduz, Qondūz',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AF-KDZ'
] );


			
State::create( [
'state_subdivision_id'=>12257,
'country_code_char2'=>'AF',
'country_code_char3'=>'AFG',
'state_subdivision_name'=>'Parwan',
'state_subdivision_alternate_names'=>'Parvan, Parvān, Parwan',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AF-PAR'
] );


			
State::create( [
'state_subdivision_id'=>12258,
'country_code_char2'=>'AF',
'country_code_char3'=>'AFG',
'state_subdivision_name'=>'Sar-e Pol',
'state_subdivision_alternate_names'=>'Sar-e Pol, Sar-i Pol, Sari Pol',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AF-SAR'
] );


			
State::create( [
'state_subdivision_id'=>12259,
'country_code_char2'=>'AF',
'country_code_char3'=>'AFG',
'state_subdivision_name'=>'Paktika',
'state_subdivision_alternate_names'=>'Paktika',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AF-PKA'
] );


			
State::create( [
'state_subdivision_id'=>12260,
'country_code_char2'=>'AF',
'country_code_char3'=>'AFG',
'state_subdivision_name'=>'Lowgar',
'state_subdivision_alternate_names'=>'Lawgar, Logar, Loghar, Lowgar, Lowghar',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AF-LOW'
] );


			
State::create( [
'state_subdivision_id'=>12261,
'country_code_char2'=>'AF',
'country_code_char3'=>'AFG',
'state_subdivision_name'=>'Kapisa',
'state_subdivision_alternate_names'=>'Kapesa, Kapisa, Kapissa',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AF-KAP'
] );


			
State::create( [
'state_subdivision_id'=>12262,
'country_code_char2'=>'AF',
'country_code_char3'=>'AFG',
'state_subdivision_name'=>'Herat',
'state_subdivision_alternate_names'=>'Herat',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AF-HER'
] );


			
State::create( [
'state_subdivision_id'=>12263,
'country_code_char2'=>'AF',
'country_code_char3'=>'AFG',
'state_subdivision_name'=>'Kandahar',
'state_subdivision_alternate_names'=>'Kandahar',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AF-KAN'
] );


			
State::create( [
'state_subdivision_id'=>12264,
'country_code_char2'=>'AF',
'country_code_char3'=>'AFG',
'state_subdivision_name'=>'Samangan',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AF-SAM'
] );


			
State::create( [
'state_subdivision_id'=>12265,
'country_code_char2'=>'AF',
'country_code_char3'=>'AFG',
'state_subdivision_name'=>'Takhar',
'state_subdivision_alternate_names'=>'Tahar, Takhar, Takhār',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AF-TAK'
] );


			
State::create( [
'state_subdivision_id'=>12266,
'country_code_char2'=>'AF',
'country_code_char3'=>'AFG',
'state_subdivision_name'=>'Wardak [Wardag]',
'state_subdivision_alternate_names'=>'Vardak, Wardagh, Wardak',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AF-WAR'
] );


			
State::create( [
'state_subdivision_id'=>12267,
'country_code_char2'=>'AF',
'country_code_char3'=>'AFG',
'state_subdivision_name'=>'Badakhshan',
'state_subdivision_alternate_names'=>'Badaẖšan',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AF-BDS'
] );


			
State::create( [
'state_subdivision_id'=>12268,
'country_code_char2'=>'AF',
'country_code_char3'=>'AFG',
'state_subdivision_name'=>'Baghlan',
'state_subdivision_alternate_names'=>'Baghlan, Baghlān, Baglan',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AF-BGL'
] );


			
State::create( [
'state_subdivision_id'=>12269,
'country_code_char2'=>'AF',
'country_code_char3'=>'AFG',
'state_subdivision_name'=>'Bamian',
'state_subdivision_alternate_names'=>'Bamian, Bamiyan, Bāmīān',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AF-BAM'
] );


			
State::create( [
'state_subdivision_id'=>12270,
'country_code_char2'=>'AF',
'country_code_char3'=>'AFG',
'state_subdivision_name'=>'Faryab',
'state_subdivision_alternate_names'=>'Fariab',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AF-FYB'
] );


			
State::create( [
'state_subdivision_id'=>12271,
'country_code_char2'=>'AF',
'country_code_char3'=>'AFG',
'state_subdivision_name'=>'Ghazni',
'state_subdivision_alternate_names'=>'Gazni, Ghazni',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AF-GHA'
] );


			
State::create( [
'state_subdivision_id'=>12272,
'country_code_char2'=>'AF',
'country_code_char3'=>'AFG',
'state_subdivision_name'=>'Badghis',
'state_subdivision_alternate_names'=>'Badghis, Badgis, Bādghīs',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AF-BDG'
] );


			
State::create( [
'state_subdivision_id'=>12273,
'country_code_char2'=>'AF',
'country_code_char3'=>'AFG',
'state_subdivision_name'=>'Balkh',
'state_subdivision_alternate_names'=>'Balkh',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AF-BAL'
] );


			
State::create( [
'state_subdivision_id'=>12274,
'country_code_char2'=>'AF',
'country_code_char3'=>'AFG',
'state_subdivision_name'=>'Farah',
'state_subdivision_alternate_names'=>'Fahrah',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AF-FRA'
] );


			
State::create( [
'state_subdivision_id'=>12275,
'country_code_char2'=>'AF',
'country_code_char3'=>'AFG',
'state_subdivision_name'=>'Ghowr',
'state_subdivision_alternate_names'=>'Ghawr, Ghor, Ghowr, Gōr',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AF-GHO'
] );


			
State::create( [
'state_subdivision_id'=>12276,
'country_code_char2'=>'AF',
'country_code_char3'=>'AFG',
'state_subdivision_name'=>'Khowst',
'state_subdivision_alternate_names'=>'H̱ōst, Khawst, Khost, Matun, Matūn, H̱awst',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AF-KHO'
] );


			
State::create( [
'state_subdivision_id'=>12277,
'country_code_char2'=>'AF',
'country_code_char3'=>'AFG',
'state_subdivision_name'=>'Helmand',
'state_subdivision_alternate_names'=>'Helmand, Hilmend',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AF-HEL'
] );


			
State::create( [
'state_subdivision_id'=>12278,
'country_code_char2'=>'AF',
'country_code_char3'=>'AFG',
'state_subdivision_name'=>'Kabul [Kabol]',
'state_subdivision_alternate_names'=>'Kabol, Kābol, Kābul, Kabul',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AF-KAB'
] );


			
State::create( [
'state_subdivision_id'=>12279,
'country_code_char2'=>'AF',
'country_code_char3'=>'AFG',
'state_subdivision_name'=>'Laghman',
'state_subdivision_alternate_names'=>'Laghman, Laghmān, Lagman',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AF-LAG'
] );


			
State::create( [
'state_subdivision_id'=>12280,
'country_code_char2'=>'AF',
'country_code_char3'=>'AFG',
'state_subdivision_name'=>'Nangrahar [Nangarhar]',
'state_subdivision_alternate_names'=>'Nangarhar, Ningarhar',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AF-NAN'
] );


			
State::create( [
'state_subdivision_id'=>12281,
'country_code_char2'=>'AF',
'country_code_char3'=>'AFG',
'state_subdivision_name'=>'Nurestan',
'state_subdivision_alternate_names'=>'Nooristan, Nouristan, Nurestan',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AF-NUR'
] );


			
State::create( [
'state_subdivision_id'=>12282,
'country_code_char2'=>'AF',
'country_code_char3'=>'AFG',
'state_subdivision_name'=>'Paktia',
'state_subdivision_alternate_names'=>'Paktia, Paktiya, Paktīā',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AF-PIA'
] );


			
State::create( [
'state_subdivision_id'=>12283,
'country_code_char2'=>'AF',
'country_code_char3'=>'AFG',
'state_subdivision_name'=>'Jowzjan',
'state_subdivision_alternate_names'=>'Jawzjan, Jowzjan, Jowzjān, Jozjan, Juzjan',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AF-JOW'
] );


			
State::create( [
'state_subdivision_id'=>12284,
'country_code_char2'=>'AF',
'country_code_char3'=>'AFG',
'state_subdivision_name'=>'Konar [Kunar]',
'state_subdivision_alternate_names'=>'Konar, Konarhā',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AF-KNR'
] );


			
State::create( [
'state_subdivision_id'=>12285,
'country_code_char2'=>'AF',
'country_code_char3'=>'AFG',
'state_subdivision_name'=>'Nimruz',
'state_subdivision_alternate_names'=>'Chakhānsur, Neemroze, Nimroz, Nimroze',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AF-NIM'
] );


			
State::create( [
'state_subdivision_id'=>12286,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Tiranë',
'state_subdivision_alternate_names'=>'Tiranë, Tirana, Tirana',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-TR'
] );


			
State::create( [
'state_subdivision_id'=>12287,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Shkodër',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-SH'
] );


			
State::create( [
'state_subdivision_id'=>12288,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Pogradec',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-PG'
] );


			
State::create( [
'state_subdivision_id'=>12289,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Mirditë',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-MR'
] );


			
State::create( [
'state_subdivision_id'=>12290,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Kolonjë',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-ER'
] );


			
State::create( [
'state_subdivision_id'=>12291,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Mat',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-MT'
] );


			
State::create( [
'state_subdivision_id'=>12292,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Peqin',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-PQ'
] );


			
State::create( [
'state_subdivision_id'=>12293,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Përmet',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-PR'
] );


			
State::create( [
'state_subdivision_id'=>12294,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Pukë',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-PU'
] );


			
State::create( [
'state_subdivision_id'=>12295,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Sarandë',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-SR'
] );


			
State::create( [
'state_subdivision_id'=>12296,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Skrapar',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-SK'
] );


			
State::create( [
'state_subdivision_id'=>12297,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Tepelenë',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-TE'
] );


			
State::create( [
'state_subdivision_id'=>12298,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Tropojë',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-TP'
] );


			
State::create( [
'state_subdivision_id'=>12299,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Vlorë',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-VL'
] );


			
State::create( [
'state_subdivision_id'=>12300,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Has',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-HA'
] );


			
State::create( [
'state_subdivision_id'=>12301,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Kavajë',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-KA'
] );


			
State::create( [
'state_subdivision_id'=>12302,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Korçë',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-KO'
] );


			
State::create( [
'state_subdivision_id'=>12303,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Krujë',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-KR'
] );


			
State::create( [
'state_subdivision_id'=>12304,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Kukës',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-KU'
] );


			
State::create( [
'state_subdivision_id'=>12305,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Kurbin',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-KB'
] );


			
State::create( [
'state_subdivision_id'=>12306,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Librazhd',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-LB'
] );


			
State::create( [
'state_subdivision_id'=>12307,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Lushnjë',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-LU'
] );


			
State::create( [
'state_subdivision_id'=>12308,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Malësi e Madhe',
'state_subdivision_alternate_names'=>'Malesia e Madhe',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-MM'
] );


			
State::create( [
'state_subdivision_id'=>12309,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Bulqizë',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-BU'
] );


			
State::create( [
'state_subdivision_id'=>12310,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Delvinë',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-DL'
] );


			
State::create( [
'state_subdivision_id'=>12311,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Dibër',
'state_subdivision_alternate_names'=>'Dibër',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-DI'
] );


			
State::create( [
'state_subdivision_id'=>12312,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Durrës',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-DR'
] );


			
State::create( [
'state_subdivision_id'=>12313,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Fier',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-FR'
] );


			
State::create( [
'state_subdivision_id'=>12314,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Gjirokastër',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-GJ'
] );


			
State::create( [
'state_subdivision_id'=>12315,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Elbasan',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-EL'
] );


			
State::create( [
'state_subdivision_id'=>12316,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Berat',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-BR'
] );


			
State::create( [
'state_subdivision_id'=>12317,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Devoll',
'state_subdivision_alternate_names'=>'Devoli',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-DV'
] );


			
State::create( [
'state_subdivision_id'=>12318,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Gramsh',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-GR'
] );


			
State::create( [
'state_subdivision_id'=>12319,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Kuçovë',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-KC'
] );


			
State::create( [
'state_subdivision_id'=>12320,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Lezhë',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-LE'
] );


			
State::create( [
'state_subdivision_id'=>12321,
'country_code_char2'=>'AL',
'country_code_char3'=>'ALB',
'state_subdivision_name'=>'Mallakastër',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AL-MK'
] );


			
State::create( [
'state_subdivision_id'=>12322,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Ouargla',
'state_subdivision_alternate_names'=>'Wargla, Ouargla',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-30'
] );


			
State::create( [
'state_subdivision_id'=>12323,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'El Oued',
'state_subdivision_alternate_names'=>'El Ouâdi, El Wad, El Oued',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-39'
] );


			
State::create( [
'state_subdivision_id'=>12324,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Tizi Ouzou',
'state_subdivision_alternate_names'=>'Tizi-Ouzou',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-15'
] );


			
State::create( [
'state_subdivision_id'=>12325,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Tissemsilt',
'state_subdivision_alternate_names'=>'Tissemselt, Tissemsilt',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-38'
] );


			
State::create( [
'state_subdivision_id'=>12326,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Sidi Bel Abbès',
'state_subdivision_alternate_names'=>'Sidi bel Abbès',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-22'
] );


			
State::create( [
'state_subdivision_id'=>12327,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Saïda',
'state_subdivision_alternate_names'=>'Saida, Saïda',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-20'
] );


			
State::create( [
'state_subdivision_id'=>12328,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Naama',
'state_subdivision_alternate_names'=>'Naama',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-45'
] );


			
State::create( [
'state_subdivision_id'=>12329,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Mila',
'state_subdivision_alternate_names'=>'Mila',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-43'
] );


			
State::create( [
'state_subdivision_id'=>12330,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Jijel',
'state_subdivision_alternate_names'=>'Djidjel, Djidjelli, Jijel, Djidjeli',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-18'
] );


			
State::create( [
'state_subdivision_id'=>12332,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Annaba',
'state_subdivision_alternate_names'=>'Bona, Bône, Annaba',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-23'
] );


			
State::create( [
'state_subdivision_id'=>12333,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Aïn Témouchent',
'state_subdivision_alternate_names'=>'Aïn Temouchent',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-46'
] );


			
State::create( [
'state_subdivision_id'=>12334,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Batna',
'state_subdivision_alternate_names'=>'Batna',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-05'
] );


			
State::create( [
'state_subdivision_id'=>12335,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Béjaïa',
'state_subdivision_alternate_names'=>'Bejaïa, Béjaïa, Bougie',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-06'
] );


			
State::create( [
'state_subdivision_id'=>12336,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Blida',
'state_subdivision_alternate_names'=>'El Boulaida, Blida',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-09'
] );


			
State::create( [
'state_subdivision_id'=>12337,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Boumerdès',
'state_subdivision_alternate_names'=>'Boumerdès',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-35'
] );


			
State::create( [
'state_subdivision_id'=>12338,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Relizane',
'state_subdivision_alternate_names'=>'Ghilizane, Ighil Izane, Rélizane, Relizane',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-48'
] );


			
State::create( [
'state_subdivision_id'=>12339,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Khenchela',
'state_subdivision_alternate_names'=>'Khenchla, Khenchela',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-40'
] );


			
State::create( [
'state_subdivision_id'=>12340,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Illizi',
'state_subdivision_alternate_names'=>'Illizi',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-33'
] );


			
State::create( [
'state_subdivision_id'=>12341,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Bouira',
'state_subdivision_alternate_names'=>'Bouira',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-10'
] );


			
State::create( [
'state_subdivision_id'=>12342,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Bordj Bou Arréridj',
'state_subdivision_alternate_names'=>'Bordj Bou Arreridj',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-34'
] );


			
State::create( [
'state_subdivision_id'=>12343,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Ghardaïa',
'state_subdivision_alternate_names'=>'Ghardaïa',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-47'
] );


			
State::create( [
'state_subdivision_id'=>12344,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Alger',
'state_subdivision_alternate_names'=>'Al-Jazair, Al-Jazaʿir, El Djazair, al-Jazāʿir, Algier, Alger',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-16'
] );


			
State::create( [
'state_subdivision_id'=>12345,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Djelfa',
'state_subdivision_alternate_names'=>'El Djelfa, Djelfa',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-17'
] );


			
State::create( [
'state_subdivision_id'=>12346,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Médéa',
'state_subdivision_alternate_names'=>'Lemdiyya, al-Midyah, Médéa',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-26'
] );


			
State::create( [
'state_subdivision_id'=>12347,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Mostaganem',
'state_subdivision_alternate_names'=>'Mestghanem, Mustaghanam, Mustaghanim, Mustaġānam, Mostaganem',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-27'
] );


			
State::create( [
'state_subdivision_id'=>12348,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Constantine',
'state_subdivision_alternate_names'=>'Ksontina, Qacentina, Qoussantina, Qusanţīnah, Constantine',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-25'
] );


			
State::create( [
'state_subdivision_id'=>12349,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Skikda',
'state_subdivision_alternate_names'=>'Skikda',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-21'
] );


			
State::create( [
'state_subdivision_id'=>12350,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Laghouat',
'state_subdivision_alternate_names'=>'Laghouat',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-03'
] );


			
State::create( [
'state_subdivision_id'=>12351,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Aïn Defla',
'state_subdivision_alternate_names'=>'Aïn Eddefla, Aïn Defla',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-44'
] );


			
State::create( [
'state_subdivision_id'=>12352,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Béchar',
'state_subdivision_alternate_names'=>'Béchar',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-08'
] );


			
State::create( [
'state_subdivision_id'=>12353,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'El Bayadh',
'state_subdivision_alternate_names'=>'El Bayadh',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-32'
] );


			
State::create( [
'state_subdivision_id'=>12354,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Biskra',
'state_subdivision_alternate_names'=>'Beskra, Biskara, Biskra',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-07'
] );


			
State::create( [
'state_subdivision_id'=>12355,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Sétif',
'state_subdivision_alternate_names'=>'Setif, Stif, Sétif',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-19'
] );


			
State::create( [
'state_subdivision_id'=>12356,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Souk Ahras',
'state_subdivision_alternate_names'=>'Souq Ahras, Souk Ahras',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-41'
] );


			
State::create( [
'state_subdivision_id'=>12357,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'El Tarf',
'state_subdivision_alternate_names'=>'El Taref, at-Tarf, El Tarf',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-36'
] );


			
State::create( [
'state_subdivision_id'=>12358,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Tébessa',
'state_subdivision_alternate_names'=>'Tbessa, Tébessa',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-12'
] );


			
State::create( [
'state_subdivision_id'=>12359,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Tindouf',
'state_subdivision_alternate_names'=>'Tindouf',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-37'
] );


			
State::create( [
'state_subdivision_id'=>12360,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Tiaret',
'state_subdivision_alternate_names'=>'Tihert, Tiaret',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-14'
] );


			
State::create( [
'state_subdivision_id'=>12361,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Oum el Bouaghi',
'state_subdivision_alternate_names'=>'Canrobert, Oum el Bouaghi',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-04'
] );


			
State::create( [
'state_subdivision_id'=>12362,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Oran',
'state_subdivision_alternate_names'=>'Ouahran, Oran',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-31'
] );


			
State::create( [
'state_subdivision_id'=>12363,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Adrar',
'state_subdivision_alternate_names'=>'Adrar',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-01'
] );


			
State::create( [
'state_subdivision_id'=>12364,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Msila',
'state_subdivision_alternate_names'=>'MʿSila, Msila',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-28'
] );


			
State::create( [
'state_subdivision_id'=>12365,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Mascara',
'state_subdivision_alternate_names'=>'Mouaskar, Mascara',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-29'
] );


			
State::create( [
'state_subdivision_id'=>12366,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Guelma',
'state_subdivision_alternate_names'=>'Guelma',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-24'
] );


			
State::create( [
'state_subdivision_id'=>12367,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Chlef',
'state_subdivision_alternate_names'=>'Al Asnam, Al Asnām, Chelef, Chelf, Chlef, Chlif, Ech Cheliff, El Asnam',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-02'
] );


			
State::create( [
'state_subdivision_id'=>12368,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Tamanghasset',
'state_subdivision_alternate_names'=>'Fort-Laperrine, Tamanghist, Tamanrasset',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-11'
] );


			
State::create( [
'state_subdivision_id'=>12369,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Tipaza',
'state_subdivision_alternate_names'=>'Tipaza',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-42'
] );


			
State::create( [
'state_subdivision_id'=>12370,
'country_code_char2'=>'DZ',
'country_code_char3'=>'DZA',
'state_subdivision_name'=>'Tlemcen',
'state_subdivision_alternate_names'=>'Tilimsen, Tlemcen',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'DZ-13'
] );


			
State::create( [
'state_subdivision_id'=>12378,
'country_code_char2'=>'AD',
'country_code_char3'=>'AND',
'state_subdivision_name'=>'Sant Julià de Lòria',
'state_subdivision_alternate_names'=>'Saint Julia de Loria',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'AD-06'
] );


			
State::create( [
'state_subdivision_id'=>12379,
'country_code_char2'=>'AD',
'country_code_char3'=>'AND',
'state_subdivision_name'=>'Ordino',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'AD-05'
] );


			
State::create( [
'state_subdivision_id'=>12380,
'country_code_char2'=>'AD',
'country_code_char3'=>'AND',
'state_subdivision_name'=>'Escaldes-Engordany',
'state_subdivision_alternate_names'=>'Les Escaldes',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'AD-08'
] );


			
State::create( [
'state_subdivision_id'=>12381,
'country_code_char2'=>'AD',
'country_code_char3'=>'AND',
'state_subdivision_name'=>'Canillo',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'AD-02'
] );


			
State::create( [
'state_subdivision_id'=>12382,
'country_code_char2'=>'AD',
'country_code_char3'=>'AND',
'state_subdivision_name'=>'Andorra la Vella',
'state_subdivision_alternate_names'=>'Andorra la Vieja, Andorre-la-Vieille',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'AD-07'
] );


			
State::create( [
'state_subdivision_id'=>12383,
'country_code_char2'=>'AD',
'country_code_char3'=>'AND',
'state_subdivision_name'=>'Encamp',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'AD-03'
] );


			
State::create( [
'state_subdivision_id'=>12384,
'country_code_char2'=>'AD',
'country_code_char3'=>'AND',
'state_subdivision_name'=>'La Massana',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'AD-04'
] );


			
State::create( [
'state_subdivision_id'=>12385,
'country_code_char2'=>'AO',
'country_code_char3'=>'AGO',
'state_subdivision_name'=>'Zaire',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AO-ZAI'
] );


			
State::create( [
'state_subdivision_id'=>12386,
'country_code_char2'=>'AO',
'country_code_char3'=>'AGO',
'state_subdivision_name'=>'Lunda Sul',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AO-LSU'
] );


			
State::create( [
'state_subdivision_id'=>12387,
'country_code_char2'=>'AO',
'country_code_char3'=>'AGO',
'state_subdivision_name'=>'Luanda',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AO-LUA'
] );


			
State::create( [
'state_subdivision_id'=>12388,
'country_code_char2'=>'AO',
'country_code_char3'=>'AGO',
'state_subdivision_name'=>'Cuanza Norte',
'state_subdivision_alternate_names'=>'Cuanza-Norte',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AO-CNO'
] );


			
State::create( [
'state_subdivision_id'=>12389,
'country_code_char2'=>'AO',
'country_code_char3'=>'AGO',
'state_subdivision_name'=>'Cunene',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AO-CNN'
] );


			
State::create( [
'state_subdivision_id'=>12390,
'country_code_char2'=>'AO',
'country_code_char3'=>'AGO',
'state_subdivision_name'=>'Bengo',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AO-BGO'
] );


			
State::create( [
'state_subdivision_id'=>12391,
'country_code_char2'=>'AO',
'country_code_char3'=>'AGO',
'state_subdivision_name'=>'Benguela',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AO-BGU'
] );


			
State::create( [
'state_subdivision_id'=>12392,
'country_code_char2'=>'AO',
'country_code_char3'=>'AGO',
'state_subdivision_name'=>'Cabinda',
'state_subdivision_alternate_names'=>'Kabinda',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AO-CAB'
] );


			
State::create( [
'state_subdivision_id'=>12393,
'country_code_char2'=>'AO',
'country_code_char3'=>'AGO',
'state_subdivision_name'=>'Huambo',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AO-HUA'
] );


			
State::create( [
'state_subdivision_id'=>12394,
'country_code_char2'=>'AO',
'country_code_char3'=>'AGO',
'state_subdivision_name'=>'Cuando-Cubango',
'state_subdivision_alternate_names'=>'Cuando-Cubango',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AO-CCU'
] );


			
State::create( [
'state_subdivision_id'=>12395,
'country_code_char2'=>'AO',
'country_code_char3'=>'AGO',
'state_subdivision_name'=>'Bié',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AO-BIE'
] );


			
State::create( [
'state_subdivision_id'=>12396,
'country_code_char2'=>'AO',
'country_code_char3'=>'AGO',
'state_subdivision_name'=>'Huíla',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AO-HUI'
] );


			
State::create( [
'state_subdivision_id'=>12397,
'country_code_char2'=>'AO',
'country_code_char3'=>'AGO',
'state_subdivision_name'=>'Cuanza Sul',
'state_subdivision_alternate_names'=>'Cuanza-Sul',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AO-CUS'
] );


			
State::create( [
'state_subdivision_id'=>12398,
'country_code_char2'=>'AO',
'country_code_char3'=>'AGO',
'state_subdivision_name'=>'Lunda Norte',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AO-LNO'
] );


			
State::create( [
'state_subdivision_id'=>12399,
'country_code_char2'=>'AO',
'country_code_char3'=>'AGO',
'state_subdivision_name'=>'Malange',
'state_subdivision_alternate_names'=>'Malange',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AO-MAL'
] );


			
State::create( [
'state_subdivision_id'=>12400,
'country_code_char2'=>'AO',
'country_code_char3'=>'AGO',
'state_subdivision_name'=>'Uíge',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AO-UIG'
] );


			
State::create( [
'state_subdivision_id'=>12401,
'country_code_char2'=>'AO',
'country_code_char3'=>'AGO',
'state_subdivision_name'=>'Moxico',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AO-MOX'
] );


			
State::create( [
'state_subdivision_id'=>12402,
'country_code_char2'=>'AO',
'country_code_char3'=>'AGO',
'state_subdivision_name'=>'Namibe',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AO-NAM'
] );


			
State::create( [
'state_subdivision_id'=>12425,
'country_code_char2'=>'AG',
'country_code_char3'=>'ATG',
'state_subdivision_name'=>'Redonda',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Dependency',
'state_subdivision_code'=>'AG-11'
] );


			
State::create( [
'state_subdivision_id'=>12426,
'country_code_char2'=>'AG',
'country_code_char3'=>'ATG',
'state_subdivision_name'=>'Barbuda',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Dependency',
'state_subdivision_code'=>'AG-10'
] );


			
State::create( [
'state_subdivision_id'=>12427,
'country_code_char2'=>'AG',
'country_code_char3'=>'ATG',
'state_subdivision_name'=>'Saint George',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'AG-03'
] );


			
State::create( [
'state_subdivision_id'=>12428,
'country_code_char2'=>'AG',
'country_code_char3'=>'ATG',
'state_subdivision_name'=>'Saint Mary',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'AG-05'
] );


			
State::create( [
'state_subdivision_id'=>12429,
'country_code_char2'=>'AG',
'country_code_char3'=>'ATG',
'state_subdivision_name'=>'Saint Paul',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'AG-06'
] );


			
State::create( [
'state_subdivision_id'=>12430,
'country_code_char2'=>'AG',
'country_code_char3'=>'ATG',
'state_subdivision_name'=>'Saint Philip',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'AG-08'
] );


			
State::create( [
'state_subdivision_id'=>12431,
'country_code_char2'=>'AG',
'country_code_char3'=>'ATG',
'state_subdivision_name'=>'Saint Johns',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'AG-04'
] );


			
State::create( [
'state_subdivision_id'=>12432,
'country_code_char2'=>'AG',
'country_code_char3'=>'ATG',
'state_subdivision_name'=>'Saint Peter',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'AG-07'
] );


			
State::create( [
'state_subdivision_id'=>12433,
'country_code_char2'=>'AR',
'country_code_char3'=>'ARG',
'state_subdivision_name'=>'Santiago del Estero',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'AR-G'
] );


			
State::create( [
'state_subdivision_id'=>12434,
'country_code_char2'=>'AR',
'country_code_char3'=>'ARG',
'state_subdivision_name'=>'Santa Cruz',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'AR-Z'
] );


			
State::create( [
'state_subdivision_id'=>12435,
'country_code_char2'=>'AR',
'country_code_char3'=>'ARG',
'state_subdivision_name'=>'Salta',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'AR-A'
] );


			
State::create( [
'state_subdivision_id'=>12436,
'country_code_char2'=>'AR',
'country_code_char3'=>'ARG',
'state_subdivision_name'=>'La Rioja',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'AR-F'
] );


			
State::create( [
'state_subdivision_id'=>12437,
'country_code_char2'=>'AR',
'country_code_char3'=>'ARG',
'state_subdivision_name'=>'Ciudad Autónoma de Buenos Aires',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'federal district',
'state_subdivision_code'=>'AR-C'
] );


			
State::create( [
'state_subdivision_id'=>12438,
'country_code_char2'=>'AR',
'country_code_char3'=>'ARG',
'state_subdivision_name'=>'Catamarca',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'AR-K'
] );


			
State::create( [
'state_subdivision_id'=>12439,
'country_code_char2'=>'AR',
'country_code_char3'=>'ARG',
'state_subdivision_name'=>'Buenos Aires',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'AR-B'
] );


			
State::create( [
'state_subdivision_id'=>12440,
'country_code_char2'=>'AR',
'country_code_char3'=>'ARG',
'state_subdivision_name'=>'Chaco',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'AR-H'
] );


			
State::create( [
'state_subdivision_id'=>12441,
'country_code_char2'=>'AR',
'country_code_char3'=>'ARG',
'state_subdivision_name'=>'Córdoba',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'AR-X'
] );


			
State::create( [
'state_subdivision_id'=>12442,
'country_code_char2'=>'AR',
'country_code_char3'=>'ARG',
'state_subdivision_name'=>'Corrientes',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'AR-W'
] );


			
State::create( [
'state_subdivision_id'=>12443,
'country_code_char2'=>'AR',
'country_code_char3'=>'ARG',
'state_subdivision_name'=>'Entre Ríos',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'AR-E'
] );


			
State::create( [
'state_subdivision_id'=>12444,
'country_code_char2'=>'AR',
'country_code_char3'=>'ARG',
'state_subdivision_name'=>'Jujuy',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'AR-Y'
] );


			
State::create( [
'state_subdivision_id'=>12445,
'country_code_char2'=>'AR',
'country_code_char3'=>'ARG',
'state_subdivision_name'=>'La Pampa',
'state_subdivision_alternate_names'=>'Pampa',
'primary_level_name'=>'province',
'state_subdivision_code'=>'AR-L'
] );


			
State::create( [
'state_subdivision_id'=>12446,
'country_code_char2'=>'AR',
'country_code_char3'=>'ARG',
'state_subdivision_name'=>'Mendoza',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'AR-M'
] );


			
State::create( [
'state_subdivision_id'=>12447,
'country_code_char2'=>'AR',
'country_code_char3'=>'ARG',
'state_subdivision_name'=>'Neuquén',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'AR-Q'
] );


			
State::create( [
'state_subdivision_id'=>12448,
'country_code_char2'=>'AR',
'country_code_char3'=>'ARG',
'state_subdivision_name'=>'Río Negro',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'AR-R'
] );


			
State::create( [
'state_subdivision_id'=>12449,
'country_code_char2'=>'AR',
'country_code_char3'=>'ARG',
'state_subdivision_name'=>'San Juan',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'AR-J'
] );


			
State::create( [
'state_subdivision_id'=>12450,
'country_code_char2'=>'AR',
'country_code_char3'=>'ARG',
'state_subdivision_name'=>'San Luis',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'AR-D'
] );


			
State::create( [
'state_subdivision_id'=>12451,
'country_code_char2'=>'AR',
'country_code_char3'=>'ARG',
'state_subdivision_name'=>'Santa Fe',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'AR-S'
] );


			
State::create( [
'state_subdivision_id'=>12452,
'country_code_char2'=>'AR',
'country_code_char3'=>'ARG',
'state_subdivision_name'=>'Tierra del Fuego',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'AR-V'
] );


			
State::create( [
'state_subdivision_id'=>12453,
'country_code_char2'=>'AR',
'country_code_char3'=>'ARG',
'state_subdivision_name'=>'Tucumán',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'AR-T'
] );


			
State::create( [
'state_subdivision_id'=>12454,
'country_code_char2'=>'AR',
'country_code_char3'=>'ARG',
'state_subdivision_name'=>'Chubut',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'AR-U'
] );


			
State::create( [
'state_subdivision_id'=>12455,
'country_code_char2'=>'AR',
'country_code_char3'=>'ARG',
'state_subdivision_name'=>'Formosa',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'AR-P'
] );


			
State::create( [
'state_subdivision_id'=>12456,
'country_code_char2'=>'AR',
'country_code_char3'=>'ARG',
'state_subdivision_name'=>'Misiones',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'AR-N'
] );


			
State::create( [
'state_subdivision_id'=>12457,
'country_code_char2'=>'AM',
'country_code_char3'=>'ARM',
'state_subdivision_name'=>'Tavuš',
'state_subdivision_alternate_names'=>'Tavoush',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AM-TV'
] );


			
State::create( [
'state_subdivision_id'=>12458,
'country_code_char2'=>'AM',
'country_code_char3'=>'ARM',
'state_subdivision_name'=>'Vayoc Jor',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AM-VD'
] );


			
State::create( [
'state_subdivision_id'=>12459,
'country_code_char2'=>'AM',
'country_code_char3'=>'ARM',
'state_subdivision_name'=>'Širak',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AM-SH'
] );


			
State::create( [
'state_subdivision_id'=>12460,
'country_code_char2'=>'AM',
'country_code_char3'=>'ARM',
'state_subdivision_name'=>'Gegark',
'state_subdivision_alternate_names'=>'unik',
'primary_level_name'=>'',
'state_subdivision_code'=>'Gegharkunick',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AM-GR'
] );


			
State::create( [
'state_subdivision_id'=>12461,
'country_code_char2'=>'AM',
'country_code_char3'=>'ARM',
'state_subdivision_name'=>'Ararat',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AM-AR'
] );


			
State::create( [
'state_subdivision_id'=>12462,
'country_code_char2'=>'AM',
'country_code_char3'=>'ARM',
'state_subdivision_name'=>'Kotayk',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Kotaik',
'state_subdivision_code'=>'AM-KT',
] );


			
State::create( [
'state_subdivision_id'=>12463,
'country_code_char2'=>'AM',
'country_code_char3'=>'ARM',
'state_subdivision_name'=>'Syunik',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AM-SU',
] );


			
State::create( [
'state_subdivision_id'=>12464,
'country_code_char2'=>'AM',
'country_code_char3'=>'ARM',
'state_subdivision_name'=>'Erevan',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'city',
'state_subdivision_code'=>'AM-ER'
] );


			
State::create( [
'state_subdivision_id'=>12465,
'country_code_char2'=>'AM',
'country_code_char3'=>'ARM',
'state_subdivision_name'=>'Lo?y',
'state_subdivision_alternate_names'=>'Lorri',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AM-LO'
] );


			
State::create( [
'state_subdivision_id'=>12466,
'country_code_char2'=>'AM',
'country_code_char3'=>'ARM',
'state_subdivision_name'=>'Aragac?otn',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AM-AG'
] );


			
State::create( [
'state_subdivision_id'=>12467,
'country_code_char2'=>'AM',
'country_code_char3'=>'ARM',
'state_subdivision_name'=>'Armavir',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'AM-AV'
] );


			
State::create( [
'state_subdivision_id'=>12470,
'country_code_char2'=>'AU',
'country_code_char3'=>'AUS',
'state_subdivision_name'=>'Western Australia',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'AU-WA'
] );


			
State::create( [
'state_subdivision_id'=>12471,
'country_code_char2'=>'AU',
'country_code_char3'=>'AUS',
'state_subdivision_name'=>'Australian Capital Territory',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'territory',
'state_subdivision_code'=>'AU-ACT'
] );


			
State::create( [
'state_subdivision_id'=>12472,
'country_code_char2'=>'AU',
'country_code_char3'=>'AUS',
'state_subdivision_name'=>'South Australia',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'AU-SA'
] );


			
State::create( [
'state_subdivision_id'=>12473,
'country_code_char2'=>'AU',
'country_code_char3'=>'AUS',
'state_subdivision_name'=>'Victoria',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'AU-VIC'
] );


			
State::create( [
'state_subdivision_id'=>12474,
'country_code_char2'=>'AU',
'country_code_char3'=>'AUS',
'state_subdivision_name'=>'Tasmania',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'AU-TAS'
] );


			
State::create( [
'state_subdivision_id'=>12475,
'country_code_char2'=>'AU',
'country_code_char3'=>'AUS',
'state_subdivision_name'=>'Northern Territory',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'territory',
'state_subdivision_code'=>'AU-NT'
] );


			
State::create( [
'state_subdivision_id'=>12476,
'country_code_char2'=>'AU',
'country_code_char3'=>'AUS',
'state_subdivision_name'=>'Queensland',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'AU-QLD'
] );


			
State::create( [
'state_subdivision_id'=>12477,
'country_code_char2'=>'AU',
'country_code_char3'=>'AUS',
'state_subdivision_name'=>'New South Wales',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'AU-NSW'
] );


			
State::create( [
'state_subdivision_id'=>12478,
'country_code_char2'=>'AT',
'country_code_char3'=>'AUT',
'state_subdivision_name'=>'Wien',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'State',
'state_subdivision_code'=>'AT-9'
] );


			
State::create( [
'state_subdivision_id'=>12479,
'country_code_char2'=>'AT',
'country_code_char3'=>'AUT',
'state_subdivision_name'=>'Salzburg',
'state_subdivision_alternate_names'=>'Salzbourg',
'primary_level_name'=>'State',
'state_subdivision_code'=>'AT-5'
] );


			
State::create( [
'state_subdivision_id'=>12480,
'country_code_char2'=>'AT',
'country_code_char3'=>'AUT',
'state_subdivision_name'=>'Burgenland',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'State',
'state_subdivision_code'=>'AT-1'
] );


			
State::create( [
'state_subdivision_id'=>12481,
'country_code_char2'=>'AT',
'country_code_char3'=>'AUT',
'state_subdivision_name'=>'Kärnten',
'state_subdivision_alternate_names'=>'Carinthia, Koroška',
'primary_level_name'=>'State',
'state_subdivision_code'=>'AT-2'
] );


			
State::create( [
'state_subdivision_id'=>12482,
'country_code_char2'=>'AT',
'country_code_char3'=>'AUT',
'state_subdivision_name'=>'Oberösterreich',
'state_subdivision_alternate_names'=>'Upper Austria',
'primary_level_name'=>'State',
'state_subdivision_code'=>'AT-4'
] );


			
State::create( [
'state_subdivision_id'=>12483,
'country_code_char2'=>'AT',
'country_code_char3'=>'AUT',
'state_subdivision_name'=>'Steiermark',
'state_subdivision_alternate_names'=>'Styria',
'primary_level_name'=>'State',
'state_subdivision_code'=>'AT-6'
] );


			
State::create( [
'state_subdivision_id'=>12484,
'country_code_char2'=>'AT',
'country_code_char3'=>'AUT',
'state_subdivision_name'=>'Vorarlberg',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'State',
'state_subdivision_code'=>'AT-8'
] );


			
State::create( [
'state_subdivision_id'=>12485,
'country_code_char2'=>'AT',
'country_code_char3'=>'AUT',
'state_subdivision_name'=>'Niederösterreich',
'state_subdivision_alternate_names'=>'Lower Austria',
'primary_level_name'=>'State',
'state_subdivision_code'=>'AT-3'
] );


			
State::create( [
'state_subdivision_id'=>12486,
'country_code_char2'=>'AT',
'country_code_char3'=>'AUT',
'state_subdivision_name'=>'Tirol',
'state_subdivision_alternate_names'=>'Tyrol',
'primary_level_name'=>'State',
'state_subdivision_code'=>'AT-7'
] );


			
State::create( [
'state_subdivision_id'=>12487,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Zängilan',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-ZAN'
] );


			
State::create( [
'state_subdivision_id'=>12488,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Yardimli',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-YAR'
] );


			
State::create( [
'state_subdivision_id'=>12489,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Xocali',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-XCI'
] );


			
State::create( [
'state_subdivision_id'=>12490,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Xankändi',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'city',
'state_subdivision_code'=>'AZ-XA'
] );


			
State::create( [
'state_subdivision_id'=>12491,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Sumqayit',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'city',
'state_subdivision_code'=>'AZ-SM'
] );


			
State::create( [
'state_subdivision_id'=>12492,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Samux',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-SMX'
] );


			
State::create( [
'state_subdivision_id'=>12493,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Agstafa',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-AGA'
] );


			
State::create( [
'state_subdivision_id'=>12494,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Babäk',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-BAB'
] );


			
State::create( [
'state_subdivision_id'=>12495,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Bärdä',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-BAR'
] );


			
State::create( [
'state_subdivision_id'=>12496,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Cäbrayil',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-CAB'
] );


			
State::create( [
'state_subdivision_id'=>12497,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Daskäsän',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-DAS'
] );


			
State::create( [
'state_subdivision_id'=>12498,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Äli Bayramli',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'city',
'state_subdivision_code'=>'AZ-AB'
] );


			
State::create( [
'state_subdivision_id'=>12499,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Gäncä',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'city',
'state_subdivision_code'=>'AZ-GA'
] );


			
State::create( [
'state_subdivision_id'=>12500,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Haciqabul',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-HAC'
] );


			
State::create( [
'state_subdivision_id'=>12501,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Ismayilli',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-ISM'
] );


			
State::create( [
'state_subdivision_id'=>12502,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Sahbuz',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-SAH'
] );


			
State::create( [
'state_subdivision_id'=>12503,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Samaxi',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-SMI'
] );


			
State::create( [
'state_subdivision_id'=>12504,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Sädäräk',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-SAD'
] );


			
State::create( [
'state_subdivision_id'=>12505,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Säki',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-SAK'
] );


			
State::create( [
'state_subdivision_id'=>12506,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Särur',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-SAR'
] );


			
State::create( [
'state_subdivision_id'=>12507,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Siyäzän',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-SIY'
] );


			
State::create( [
'state_subdivision_id'=>12508,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Susa',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-SUS'
] );


			
State::create( [
'state_subdivision_id'=>12509,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Tärtär',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-TAR'
] );


			
State::create( [
'state_subdivision_id'=>12510,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Ucar',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-UCA'
] );


			
State::create( [
'state_subdivision_id'=>12512,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Goranboy',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-GOR'
] );


			
State::create( [
'state_subdivision_id'=>12513,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Göyçay',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-GOY'
] );


			
State::create( [
'state_subdivision_id'=>12514,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Imisli',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-IMI'
] );


			
State::create( [
'state_subdivision_id'=>12515,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Kälbäcär',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-KAL'
] );


			
State::create( [
'state_subdivision_id'=>12516,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Kürdämir',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-KUR'
] );


			
State::create( [
'state_subdivision_id'=>12517,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Länkäran',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-LAN'
] );


			
State::create( [
'state_subdivision_id'=>12518,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Lerik',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-LER'
] );


			
State::create( [
'state_subdivision_id'=>12519,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Mingäçevir',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'city',
'state_subdivision_code'=>'AZ-MI'
] );


			
State::create( [
'state_subdivision_id'=>12520,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Naftalan',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'city',
'state_subdivision_code'=>'AZ-NA'
] );


			
State::create( [
'state_subdivision_id'=>12521,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Abseron',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-ABS'
] );


			
State::create( [
'state_subdivision_id'=>12522,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Agcabädi',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-AGC'
] );


			
State::create( [
'state_subdivision_id'=>12523,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Agdas',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-AGS'
] );


			
State::create( [
'state_subdivision_id'=>12524,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Agsu',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-AGU'
] );


			
State::create( [
'state_subdivision_id'=>12525,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Astara',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-AST'
] );


			
State::create( [
'state_subdivision_id'=>12526,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Baki',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'city',
'state_subdivision_code'=>'AZ-BA'
] );


			
State::create( [
'state_subdivision_id'=>12527,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Balakän',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-BAL'
] );


			
State::create( [
'state_subdivision_id'=>12528,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Beyläqan',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-BEY'
] );


			
State::create( [
'state_subdivision_id'=>12529,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Biläsuvar',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-BIL'
] );


			
State::create( [
'state_subdivision_id'=>12530,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Cälilabab',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-CAL'
] );


			
State::create( [
'state_subdivision_id'=>12531,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Culfa',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-CUL'
] );


			
State::create( [
'state_subdivision_id'=>12532,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Däväçi',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-DAV'
] );


			
State::create( [
'state_subdivision_id'=>12533,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Füzuli',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-FUZ'
] );


			
State::create( [
'state_subdivision_id'=>12534,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Gädäbäy',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-GAD'
] );


			
State::create( [
'state_subdivision_id'=>12535,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Neftçala',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-NEF'
] );


			
State::create( [
'state_subdivision_id'=>12536,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Ordubad',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-ORD'
] );


			
State::create( [
'state_subdivision_id'=>12537,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Qax',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-QAX'
] );


			
State::create( [
'state_subdivision_id'=>12538,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Qäbälä',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-QAB'
] );


			
State::create( [
'state_subdivision_id'=>12539,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Qobustan',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-QOB'
] );


			
State::create( [
'state_subdivision_id'=>12540,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Qubadli',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-QBI'
] );


			
State::create( [
'state_subdivision_id'=>12541,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Qusar',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-QUS'
] );


			
State::create( [
'state_subdivision_id'=>12542,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Sabirabad',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-SAB'
] );


			
State::create( [
'state_subdivision_id'=>12543,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Xaçmaz',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-XAC'
] );


			
State::create( [
'state_subdivision_id'=>12544,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Xanlar',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-XAN'
] );


			
State::create( [
'state_subdivision_id'=>12545,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Xizi',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-XIZ'
] );


			
State::create( [
'state_subdivision_id'=>12546,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Xocavänd',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-XVD'
] );


			
State::create( [
'state_subdivision_id'=>12547,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Yevlax',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-YEV'
] );


			
State::create( [
'state_subdivision_id'=>12548,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Zaqatala',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-ZAQ'
] );


			
State::create( [
'state_subdivision_id'=>12549,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Zärdab',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-ZAR'
] );


			
State::create( [
'state_subdivision_id'=>12550,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Agdam',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-AGM'
] );


			
State::create( [
'state_subdivision_id'=>12551,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Laçin',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-LAC'
] );


			
State::create( [
'state_subdivision_id'=>12552,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Masalli',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-MAS'
] );


			
State::create( [
'state_subdivision_id'=>12553,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Naxçivan',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'city',
'state_subdivision_code'=>'AZ-NX'
] );


			
State::create( [
'state_subdivision_id'=>12554,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Oguz',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-OGU'
] );


			
State::create( [
'state_subdivision_id'=>12555,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Qazax',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-QAZ'
] );


			
State::create( [
'state_subdivision_id'=>12556,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Quba',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-QBA'
] );


			
State::create( [
'state_subdivision_id'=>12557,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Saatli',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-SAT'
] );


			
State::create( [
'state_subdivision_id'=>12558,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Salyan',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-SAL'
] );


			
State::create( [
'state_subdivision_id'=>12559,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Sämkir',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-SKR'
] );


			
State::create( [
'state_subdivision_id'=>12560,
'country_code_char2'=>'AZ',
'country_code_char3'=>'AZE',
'state_subdivision_name'=>'Tovuz',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'AZ-TOV'
] );


			
State::create( [
'state_subdivision_id'=>12564,
'country_code_char2'=>'BS',
'country_code_char3'=>'BHS',
'state_subdivision_name'=>'Mayaguana',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BS-MG'
] );


			
State::create( [
'state_subdivision_id'=>12565,
'country_code_char2'=>'BS',
'country_code_char3'=>'BHS',
'state_subdivision_name'=>'Inagua',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BS-IN'
] );


			
State::create( [
'state_subdivision_id'=>12566,
'country_code_char2'=>'BS',
'country_code_char3'=>'BHS',
'state_subdivision_name'=>'City of Freeport',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'district',
'state_subdivision_code'=>'BS-FP'
] );


			
State::create( [
'state_subdivision_id'=>12567,
'country_code_char2'=>'BS',
'country_code_char3'=>'BHS',
'state_subdivision_name'=>'Acklins  Islands',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BS-AK'
] );


			
State::create( [
'state_subdivision_id'=>12568,
'country_code_char2'=>'BS',
'country_code_char3'=>'BHS',
'state_subdivision_name'=>'Ragged Island',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BS-RI'
] );


			
State::create( [
'state_subdivision_id'=>12571,
'country_code_char2'=>'BS',
'country_code_char3'=>'BHS',
'state_subdivision_name'=>'Green Turtle Cay',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BS-GT'
] );


			
State::create( [
'state_subdivision_id'=>12572,
'country_code_char2'=>'BS',
'country_code_char3'=>'BHS',
'state_subdivision_name'=>'Grand Cay',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BS-GC'
] );


			
State::create( [
'state_subdivision_id'=>12574,
'country_code_char2'=>'BS',
'country_code_char3'=>'BHS',
'state_subdivision_name'=>'Bimini and Cat Cay',
'state_subdivision_alternate_names'=>'Bimini Islands',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BS-BI'
] );


			
State::create( [
'state_subdivision_id'=>12575,
'country_code_char2'=>'BS',
'country_code_char3'=>'BHS',
'state_subdivision_name'=>'Cat Island',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BS-CI'
] );


			
State::create( [
'state_subdivision_id'=>12578,
'country_code_char2'=>'BS',
'country_code_char3'=>'BHS',
'state_subdivision_name'=>'Exuma',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BS-EX'
] );


			
State::create( [
'state_subdivision_id'=>12579,
'country_code_char2'=>'BS',
'country_code_char3'=>'BHS',
'state_subdivision_name'=>'Harbour Island',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BS-HI'
] );


			
State::create( [
'state_subdivision_id'=>12580,
'country_code_char2'=>'BS',
'country_code_char3'=>'BHS',
'state_subdivision_name'=>'Long Island',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BS-LI'
] );


			
State::create( [
'state_subdivision_id'=>12581,
'country_code_char2'=>'BH',
'country_code_char3'=>'BHR',
'state_subdivision_name'=>'Al Wustá',
'state_subdivision_alternate_names'=>'Central, al-Mintaqah al-Wusta',
'primary_level_name'=>'Governorate',
'state_subdivision_code'=>'BH-16'
] );


			
State::create( [
'state_subdivision_id'=>12582,
'country_code_char2'=>'BH',
'country_code_char3'=>'BHR',
'state_subdivision_name'=>'Ash Shamaliyah',
'state_subdivision_alternate_names'=>'Northern, al-Mintaqa ash Shamaliyah, ash Shamaliyah',
'primary_level_name'=>'Governorate',
'state_subdivision_code'=>'BH-17'
] );


			
State::create( [
'state_subdivision_id'=>12583,
'country_code_char2'=>'BH',
'country_code_char3'=>'BHR',
'state_subdivision_name'=>'Al Muharraq',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Governorate',
'state_subdivision_code'=>'BH-15'
] );


			
State::create( [
'state_subdivision_id'=>12589,
'country_code_char2'=>'BH',
'country_code_char3'=>'BHR',
'state_subdivision_name'=>'Al Manamah',
'state_subdivision_alternate_names'=>'Manāmah, al-Manāmah, Manama, Manama, Manama',
'primary_level_name'=>'Governorate',
'state_subdivision_code'=>'BH-13'
] );


			
State::create( [
'state_subdivision_id'=>12592,
'country_code_char2'=>'BH',
'country_code_char3'=>'BHR',
'state_subdivision_name'=>'Al Janubiyah',
'state_subdivision_alternate_names'=>'Eastern, Hawa, Juzur H̨awār, Southern, ash Sharqiyah, aš-Šarqīyah',
'primary_level_name'=>'Governorate',
'state_subdivision_code'=>'BH-14'
] );


			
State::create( [
'state_subdivision_id'=>12593,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Tangail zila',
'state_subdivision_alternate_names'=>'Tangail, Tangayal',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-63'
] );


			
State::create( [
'state_subdivision_id'=>12594,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Sirajganj zila',
'state_subdivision_alternate_names'=>'Serajgonj, Sirajganj',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-59'
] );


			
State::create( [
'state_subdivision_id'=>12595,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Sherpur zila',
'state_subdivision_alternate_names'=>'Sherpur',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-57'
] );


			
State::create( [
'state_subdivision_id'=>12596,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Rajshahi zila',
'state_subdivision_alternate_names'=>'Rajshahi, Rampur Boalia',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-54'
] );


			
State::create( [
'state_subdivision_id'=>12597,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Panchagarh zila',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-52'
] );


			
State::create( [
'state_subdivision_id'=>12598,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Nawabganj zila',
'state_subdivision_alternate_names'=>'Nawabganj, Nawabgonj',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-45'
] );


			
State::create( [
'state_subdivision_id'=>12599,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Narayanganj zila',
'state_subdivision_alternate_names'=>'Narayanganj',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-40'
] );


			
State::create( [
'state_subdivision_id'=>12600,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Bagerhat zila',
'state_subdivision_alternate_names'=>'Bagarhat, Bagerhat, Bagherhat, Basabari, Bāsābāri',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-05'
] );


			
State::create( [
'state_subdivision_id'=>12601,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Bandarban zila',
'state_subdivision_alternate_names'=>'Bandarban',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-01'
] );


			
State::create( [
'state_subdivision_id'=>12602,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Barguna zila',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-02'
] );


			
State::create( [
'state_subdivision_id'=>12603,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Jessore zila',
'state_subdivision_alternate_names'=>'Jessore, Jessur',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-22'
] );


			
State::create( [
'state_subdivision_id'=>12604,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Jhenaidah zila',
'state_subdivision_alternate_names'=>'Jhanaydah, Jhanidah, Jhanīdāh, Jhenaida, Jhenida',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-23'
] );


			
State::create( [
'state_subdivision_id'=>12605,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Kishoreganj zila',
'state_subdivision_alternate_names'=>'Kishoreganj',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-26'
] );


			
State::create( [
'state_subdivision_id'=>12606,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Comilla zila',
'state_subdivision_alternate_names'=>'Comilla, Komilla',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-08'
] );


			
State::create( [
'state_subdivision_id'=>12607,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Kushtia zila',
'state_subdivision_alternate_names'=>'Kushtia, Kushtiya',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-30'
] );


			
State::create( [
'state_subdivision_id'=>12608,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Lalmonirhat zila',
'state_subdivision_alternate_names'=>'Lalmanir Hat, Lalmonirhat',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-32'
] );


			
State::create( [
'state_subdivision_id'=>12609,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Magura zila',
'state_subdivision_alternate_names'=>'Magura',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-37'
] );


			
State::create( [
'state_subdivision_id'=>12610,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Manikganj zila',
'state_subdivision_alternate_names'=>'Manikganj',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-33'
] );


			
State::create( [
'state_subdivision_id'=>12611,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Meherpur zila',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-39'
] );


			
State::create( [
'state_subdivision_id'=>12612,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Barisal zila',
'state_subdivision_alternate_names'=>'Barisal',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-06'
] );


			
State::create( [
'state_subdivision_id'=>12613,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Bhola zila',
'state_subdivision_alternate_names'=>'Bhola',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-07'
] );


			
State::create( [
'state_subdivision_id'=>12614,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Bogra zila',
'state_subdivision_alternate_names'=>'Bogora, Bogra, Borga Thana',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-03'
] );


			
State::create( [
'state_subdivision_id'=>12615,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Chandpur zila',
'state_subdivision_alternate_names'=>'Chandipur, Chandpur',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-09'
] );


			
State::create( [
'state_subdivision_id'=>12616,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Dhaka zila',
'state_subdivision_alternate_names'=>'Dacca, Dakka, Dhaka',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-13'
] );


			
State::create( [
'state_subdivision_id'=>12617,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Faridpur zila',
'state_subdivision_alternate_names'=>'Faridpur',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-15'
] );


			
State::create( [
'state_subdivision_id'=>12618,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Feni zila',
'state_subdivision_alternate_names'=>'Feni',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-16'
] );


			
State::create( [
'state_subdivision_id'=>12619,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Gopalganj zila',
'state_subdivision_alternate_names'=>'Gopalganj',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-17'
] );


			
State::create( [
'state_subdivision_id'=>12620,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Jaipurhat zila',
'state_subdivision_alternate_names'=>'Jaipur Hat, Jaipurhat, Joypurhat',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-24'
] );


			
State::create( [
'state_subdivision_id'=>12621,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Mymensingh zila',
'state_subdivision_alternate_names'=>'Mymensingh, Nasirabad, Nasirābād',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-34'
] );


			
State::create( [
'state_subdivision_id'=>12622,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Moulvibazar zila',
'state_subdivision_alternate_names'=>'Maulvi Bazar, Moulvi Bazar',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-38'
] );


			
State::create( [
'state_subdivision_id'=>12623,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Munshiganj zila',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-35'
] );


			
State::create( [
'state_subdivision_id'=>12624,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Narail zila',
'state_subdivision_alternate_names'=>'Narail, Naral',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-43'
] );


			
State::create( [
'state_subdivision_id'=>12625,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Narsingdi zila',
'state_subdivision_alternate_names'=>'Narsinghdi',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-42'
] );


			
State::create( [
'state_subdivision_id'=>12626,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Naogaon zila',
'state_subdivision_alternate_names'=>'Naogaon, Naugaon',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-48'
] );


			
State::create( [
'state_subdivision_id'=>12627,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Netrakona zila',
'state_subdivision_alternate_names'=>'Netrakona, Netrokana',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-41'
] );


			
State::create( [
'state_subdivision_id'=>12628,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Noakhali zila',
'state_subdivision_alternate_names'=>'Noakhali',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-47'
] );


			
State::create( [
'state_subdivision_id'=>12629,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Pabna zila',
'state_subdivision_alternate_names'=>'Pabna',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-49'
] );


			
State::create( [
'state_subdivision_id'=>12630,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Brahmanbaria zila',
'state_subdivision_alternate_names'=>'Brahman Bariya, Brahmanbaria',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-04'
] );


			
State::create( [
'state_subdivision_id'=>12631,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Chittagong zila',
'state_subdivision_alternate_names'=>'Chattagam, Chittagong',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-10'
] );


			
State::create( [
'state_subdivision_id'=>12632,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Chuadanga zila',
'state_subdivision_alternate_names'=>'Chuadanga',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-12'
] );


			
State::create( [
'state_subdivision_id'=>12633,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Dinajpur zila',
'state_subdivision_alternate_names'=>'Dinajpur',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-14'
] );


			
State::create( [
'state_subdivision_id'=>12634,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Gaibandha zila',
'state_subdivision_alternate_names'=>'Gaibanda, Gaibandah, Gaibandha, Gaybanda, Gaybandah',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-19'
] );


			
State::create( [
'state_subdivision_id'=>12635,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Gazipur zila',
'state_subdivision_alternate_names'=>'Gajipur',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-18'
] );


			
State::create( [
'state_subdivision_id'=>12636,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Habiganj zila',
'state_subdivision_alternate_names'=>'Habiganj, Hobiganj, Hobigonj',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-20'
] );


			
State::create( [
'state_subdivision_id'=>12637,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Jamalpur zila',
'state_subdivision_alternate_names'=>'Jamalpur',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-21'
] );


			
State::create( [
'state_subdivision_id'=>12638,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Jhalakati zila',
'state_subdivision_alternate_names'=>'Jhalakati, Jhalokati',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-25'
] );


			
State::create( [
'state_subdivision_id'=>12639,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Khagrachari zila',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-29'
] );


			
State::create( [
'state_subdivision_id'=>12640,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Khulna zila',
'state_subdivision_alternate_names'=>'Khulna',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-27'
] );


			
State::create( [
'state_subdivision_id'=>12641,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Cox',
'state_subdivision_alternate_names'=>'s Bazar zila',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-11',
] );


			
State::create( [
'state_subdivision_id'=>12642,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Kurigram zila',
'state_subdivision_alternate_names'=>'Kurigram',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-28'
] );


			
State::create( [
'state_subdivision_id'=>12643,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Lakshmipur zila',
'state_subdivision_alternate_names'=>'Lakshmipur, Laksmipur',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-31'
] );


			
State::create( [
'state_subdivision_id'=>12644,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Madaripur zila',
'state_subdivision_alternate_names'=>'Madaripur',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-36'
] );


			
State::create( [
'state_subdivision_id'=>12645,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Patuakhali zila',
'state_subdivision_alternate_names'=>'Patukhali',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-51'
] );


			
State::create( [
'state_subdivision_id'=>12646,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Rajbari zila',
'state_subdivision_alternate_names'=>'Rajbari',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-53'
] );


			
State::create( [
'state_subdivision_id'=>12647,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Rangamati zila',
'state_subdivision_alternate_names'=>'Rangamati',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-56'
] );


			
State::create( [
'state_subdivision_id'=>12648,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Rangpur zila',
'state_subdivision_alternate_names'=>'Rangpur',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-55'
] );


			
State::create( [
'state_subdivision_id'=>12649,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Shariatpur zila',
'state_subdivision_alternate_names'=>'Shariatpur',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-62'
] );


			
State::create( [
'state_subdivision_id'=>12650,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Sylhet zila',
'state_subdivision_alternate_names'=>'Silhat, Sylhet',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-60'
] );


			
State::create( [
'state_subdivision_id'=>12651,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Sunamganj zila',
'state_subdivision_alternate_names'=>'Shunamganj, Sunamganj',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-61'
] );


			
State::create( [
'state_subdivision_id'=>12652,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Thakurgaon zila',
'state_subdivision_alternate_names'=>'Thakurgaon',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-64'
] );


			
State::create( [
'state_subdivision_id'=>12653,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Natore zila',
'state_subdivision_alternate_names'=>'Nator, Natore',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-44'
] );


			
State::create( [
'state_subdivision_id'=>12654,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Nilphamari zila',
'state_subdivision_alternate_names'=>'Nilphamari',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-46'
] );


			
State::create( [
'state_subdivision_id'=>12655,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Pirojpur zila',
'state_subdivision_alternate_names'=>'Perojpur, Pirojpur',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-50'
] );


			
State::create( [
'state_subdivision_id'=>12656,
'country_code_char2'=>'BD',
'country_code_char3'=>'BGD',
'state_subdivision_name'=>'Satkhira zila',
'state_subdivision_alternate_names'=>'Satkhira',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BD-58'
] );


			
State::create( [
'state_subdivision_id'=>12657,
'country_code_char2'=>'BB',
'country_code_char3'=>'BRB',
'state_subdivision_name'=>'Saint Thomas',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'BB-11'
] );


			
State::create( [
'state_subdivision_id'=>12658,
'country_code_char2'=>'BB',
'country_code_char3'=>'BRB',
'state_subdivision_name'=>'Saint Michael',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'BB-08'
] );


			
State::create( [
'state_subdivision_id'=>12659,
'country_code_char2'=>'BB',
'country_code_char3'=>'BRB',
'state_subdivision_name'=>'Saint Joseph',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'BB-06'
] );


			
State::create( [
'state_subdivision_id'=>12660,
'country_code_char2'=>'BB',
'country_code_char3'=>'BRB',
'state_subdivision_name'=>'Saint James',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'BB-04'
] );


			
State::create( [
'state_subdivision_id'=>12661,
'country_code_char2'=>'BB',
'country_code_char3'=>'BRB',
'state_subdivision_name'=>'Christ Church',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'BB-01'
] );


			
State::create( [
'state_subdivision_id'=>12662,
'country_code_char2'=>'BB',
'country_code_char3'=>'BRB',
'state_subdivision_name'=>'Saint George',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'BB-03'
] );


			
State::create( [
'state_subdivision_id'=>12663,
'country_code_char2'=>'BB',
'country_code_char3'=>'BRB',
'state_subdivision_name'=>'Saint Andrew',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'BB-02'
] );


			
State::create( [
'state_subdivision_id'=>12664,
'country_code_char2'=>'BB',
'country_code_char3'=>'BRB',
'state_subdivision_name'=>'Saint John',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'BB-05'
] );


			
State::create( [
'state_subdivision_id'=>12665,
'country_code_char2'=>'BB',
'country_code_char3'=>'BRB',
'state_subdivision_name'=>'Saint Lucy',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'BB-07'
] );


			
State::create( [
'state_subdivision_id'=>12666,
'country_code_char2'=>'BB',
'country_code_char3'=>'BRB',
'state_subdivision_name'=>'Saint Peter',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'BB-09'
] );


			
State::create( [
'state_subdivision_id'=>12667,
'country_code_char2'=>'BB',
'country_code_char3'=>'BRB',
'state_subdivision_name'=>'Saint Philip',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'BB-10'
] );


			
State::create( [
'state_subdivision_id'=>12668,
'country_code_char2'=>'BY',
'country_code_char3'=>'BLR',
'state_subdivision_name'=>'Vitsyebskaya voblasts',
'state_subdivision_alternate_names'=>'Vicebskaja Voblastsʿ, Vicebskaya Voblastsʿ, Viciebsk, Vicjebsk, Vitebsk, Vitebskaja Oblastʿ, Vitebskaya Oblastʿ, Vitsyebsk',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BY-VI'
] );


			
State::create( [
'state_subdivision_id'=>12669,
'country_code_char2'=>'BY',
'country_code_char3'=>'BLR',
'state_subdivision_name'=>'Brestskaya voblasts',
'state_subdivision_alternate_names'=>'Bierascie, Brest-Litovsk, Brestskaja Oblastʿ, Brestskaja Voblastsʿ, Brestskaya Oblastʿ, Brestskaya Voblastsʿ, Brisk, Brześć nad Bugiem, Brześć-Litewski',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BY-BR'
] );


			
State::create( [
'state_subdivision_id'=>12670,
'country_code_char2'=>'BY',
'country_code_char3'=>'BLR',
'state_subdivision_name'=>'Homyel',
'state_subdivision_alternate_names'=>'skaya voblasts',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BY-HO',
] );


			
State::create( [
'state_subdivision_id'=>12671,
'country_code_char2'=>'BY',
'country_code_char3'=>'BLR',
'state_subdivision_name'=>'Mahilyowskaya voblasts',
'state_subdivision_alternate_names'=>'Mahiljov, Mahiljowskaja Voblastsʿ, Mahilyov, Mahilyowskaya Voblastsʿ, Mahilëv, Mahilëŭ, Mogilev, Mogiliov, Mogiljovskaja Oblastʿ, Mogilov, Mogilyovskaya Oblast, Mogilëv, Mogilʿov',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BY-MA'
] );


			
State::create( [
'state_subdivision_id'=>12672,
'country_code_char2'=>'BY',
'country_code_char3'=>'BLR',
'state_subdivision_name'=>'Hrodzenskaya voblasts',
'state_subdivision_alternate_names'=>'Gardinas, Grodnenskaja Oblastʿ, Grodnenskaya Oblastʿ, Grodno, Horadnia, Hrodno, Hrodzenskaja Voblastsʿ, Hrodzenskaya Voblastsʿ',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BY-HR'
] );


			
State::create( [
'state_subdivision_id'=>12673,
'country_code_char2'=>'BY',
'country_code_char3'=>'BLR',
'state_subdivision_name'=>'Minskaya voblasts',
'state_subdivision_alternate_names'=>'Minskaja Oblastʿ, Minskaya Oblastʿ, Minskaya Voblastsʿ',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BY-MI'
] );


			
State::create( [
'state_subdivision_id'=>12674,
'country_code_char2'=>'BY',
'country_code_char3'=>'BLR',
'state_subdivision_name'=>'Horad Minsk',
'state_subdivision_alternate_names'=>'Gorod Minsk, Horad Minsk, Mensk',
'primary_level_name'=>'city',
'state_subdivision_code'=>'BY-HM'
] );


			
State::create( [
'state_subdivision_id'=>12675,
'country_code_char2'=>'BE',
'country_code_char3'=>'BEL',
'state_subdivision_name'=>'Vlaams Brabant',
'state_subdivision_alternate_names'=>'Brabant-Vlanderen, Vlaams-Brabant, Flämisch Brabant, Brabant-Flamand',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BE-VBR'
] );


			
State::create( [
'state_subdivision_id'=>12676,
'country_code_char2'=>'BE',
'country_code_char3'=>'BEL',
'state_subdivision_name'=>'Luxembourg',
'state_subdivision_alternate_names'=>'Luxembourg, Luxemburg',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BE-WLX'
] );


			
State::create( [
'state_subdivision_id'=>12677,
'country_code_char2'=>'BE',
'country_code_char3'=>'BEL',
'state_subdivision_name'=>'Oost-Vlaanderen',
'state_subdivision_alternate_names'=>'Oos-Vlanderen, Oost-Vlaanderen, Ost-Flandern, Flandre-Orientale',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BE-VOV'
] );


			
State::create( [
'state_subdivision_id'=>12678,
'country_code_char2'=>'BE',
'country_code_char3'=>'BEL',
'state_subdivision_name'=>'Hainaut',
'state_subdivision_alternate_names'=>'Henegouwen, Hennegau',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BE-WHT'
] );


			
State::create( [
'state_subdivision_id'=>12679,
'country_code_char2'=>'BE',
'country_code_char3'=>'BEL',
'state_subdivision_name'=>'Brabant Wallon',
'state_subdivision_alternate_names'=>'Waals-Brabant, Wallonisch Brabant, Walloon Brabant',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BE-WBR'
] );


			
State::create( [
'state_subdivision_id'=>12680,
'country_code_char2'=>'BE',
'country_code_char3'=>'BEL',
'state_subdivision_name'=>'Limburg',
'state_subdivision_alternate_names'=>'Limbourg',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BE-VLI'
] );


			
State::create( [
'state_subdivision_id'=>12681,
'country_code_char2'=>'BE',
'country_code_char3'=>'BEL',
'state_subdivision_name'=>'West-Vlaanderen',
'state_subdivision_alternate_names'=>'Wes-Vlanderen, West-Vlaanderen, West-Flandern, Flandre-Occidentale',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BE-VWV'
] );


			
State::create( [
'state_subdivision_id'=>12682,
'country_code_char2'=>'BE',
'country_code_char3'=>'BEL',
'state_subdivision_name'=>'Brussels',
'state_subdivision_alternate_names'=>'Brussels Hoofdstedelijk Gewest, Région de Bruxelles-Capitale, Brussel, Brüssel, Bruxelles',
'primary_level_name'=>'Capital Region',
'state_subdivision_code'=>'BE-BRU'
] );


			
State::create( [
'state_subdivision_id'=>12683,
'country_code_char2'=>'BE',
'country_code_char3'=>'BEL',
'state_subdivision_name'=>'Antwerpen',
'state_subdivision_alternate_names'=>'Antwerpen, Anvers',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BE-VAN'
] );


			
State::create( [
'state_subdivision_id'=>12684,
'country_code_char2'=>'BE',
'country_code_char3'=>'BEL',
'state_subdivision_name'=>'Liège',
'state_subdivision_alternate_names'=>'Luik, Lüttich',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BE-WLG'
] );


			
State::create( [
'state_subdivision_id'=>12685,
'country_code_char2'=>'BE',
'country_code_char3'=>'BEL',
'state_subdivision_name'=>'Namur',
'state_subdivision_alternate_names'=>'Namen',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BE-WNA'
] );

State::create( [
'state_subdivision_id'=>12686,
'country_code_char2'=>'BZ',
'country_code_char3'=>'BLZ',
'state_subdivision_name'=>'Stann Creek',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BZ-SC'
] );


			
State::create( [
'state_subdivision_id'=>12687,
'country_code_char2'=>'BZ',
'country_code_char3'=>'BLZ',
'state_subdivision_name'=>'Belize',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BZ-BZ'
] );


			
State::create( [
'state_subdivision_id'=>12688,
'country_code_char2'=>'BZ',
'country_code_char3'=>'BLZ',
'state_subdivision_name'=>'Corozal',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BZ-CZL'
] );


			
State::create( [
'state_subdivision_id'=>12689,
'country_code_char2'=>'BZ',
'country_code_char3'=>'BLZ',
'state_subdivision_name'=>'Orange Walk',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BZ-OW'
] );


			
State::create( [
'state_subdivision_id'=>12690,
'country_code_char2'=>'BZ',
'country_code_char3'=>'BLZ',
'state_subdivision_name'=>'Toledo',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BZ-TOL'
] );


			
State::create( [
'state_subdivision_id'=>12691,
'country_code_char2'=>'BZ',
'country_code_char3'=>'BLZ',
'state_subdivision_name'=>'Cayo',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BZ-CY'
] );


			
State::create( [
'state_subdivision_id'=>12692,
'country_code_char2'=>'BJ',
'country_code_char3'=>'BEN',
'state_subdivision_name'=>'Zou',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'BJ-ZO'
] );


			
State::create( [
'state_subdivision_id'=>12693,
'country_code_char2'=>'BJ',
'country_code_char3'=>'BEN',
'state_subdivision_name'=>'Plateau',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'BJ-PL'
] );


			
State::create( [
'state_subdivision_id'=>12694,
'country_code_char2'=>'BJ',
'country_code_char3'=>'BEN',
'state_subdivision_name'=>'Littoral',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'BJ-LI'
] );


			
State::create( [
'state_subdivision_id'=>12696,
'country_code_char2'=>'BJ',
'country_code_char3'=>'BEN',
'state_subdivision_name'=>'Alibori',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'BJ-AL'
] );


			
State::create( [
'state_subdivision_id'=>12697,
'country_code_char2'=>'BJ',
'country_code_char3'=>'BEN',
'state_subdivision_name'=>'Atlantique',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'BJ-AQ'
] );


			
State::create( [
'state_subdivision_id'=>12698,
'country_code_char2'=>'BJ',
'country_code_char3'=>'BEN',
'state_subdivision_name'=>'Borgou',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'BJ-BO'
] );


			
State::create( [
'state_subdivision_id'=>12699,
'country_code_char2'=>'BJ',
'country_code_char3'=>'BEN',
'state_subdivision_name'=>'Kouffo',
'state_subdivision_alternate_names'=>'Kouffo',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'BJ-KO'
] );


			
State::create( [
'state_subdivision_id'=>12700,
'country_code_char2'=>'BJ',
'country_code_char3'=>'BEN',
'state_subdivision_name'=>'Mono',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'BJ-MO'
] );


			
State::create( [
'state_subdivision_id'=>12701,
'country_code_char2'=>'BJ',
'country_code_char3'=>'BEN',
'state_subdivision_name'=>'Ouémé',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'BJ-OU'
] );


			
State::create( [
'state_subdivision_id'=>12702,
'country_code_char2'=>'BJ',
'country_code_char3'=>'BEN',
'state_subdivision_name'=>'Atakora',
'state_subdivision_alternate_names'=>'Atakora',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'BJ-AK'
] );


			
State::create( [
'state_subdivision_id'=>12704,
'country_code_char2'=>'BJ',
'country_code_char3'=>'BEN',
'state_subdivision_name'=>'Collines',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'BJ-CO'
] );


			
State::create( [
'state_subdivision_id'=>12705,
'country_code_char2'=>'BJ',
'country_code_char3'=>'BEN',
'state_subdivision_name'=>'Donga',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'BJ-DO'
] );


			
State::create( [
'state_subdivision_id'=>12717,
'country_code_char2'=>'BT',
'country_code_char3'=>'BTN',
'state_subdivision_name'=>'Trongsa',
'state_subdivision_alternate_names'=>'Tongsa, Trongsa',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BT-32'
] );


			
State::create( [
'state_subdivision_id'=>12718,
'country_code_char2'=>'BT',
'country_code_char3'=>'BTN',
'state_subdivision_name'=>'Samtse',
'state_subdivision_alternate_names'=>'Samchi, Samtse',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BT-14'
] );


			
State::create( [
'state_subdivision_id'=>12719,
'country_code_char2'=>'BT',
'country_code_char3'=>'BTN',
'state_subdivision_name'=>'Punakha',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BT-23'
] );


			
State::create( [
'state_subdivision_id'=>12720,
'country_code_char2'=>'BT',
'country_code_char3'=>'BTN',
'state_subdivision_name'=>'Zhemgang',
'state_subdivision_alternate_names'=>'Shemgang, Zhemgang',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BT-34'
] );


			
State::create( [
'state_subdivision_id'=>12721,
'country_code_char2'=>'BT',
'country_code_char3'=>'BTN',
'state_subdivision_name'=>'Trashigang',
'state_subdivision_alternate_names'=>'Tashigang, Trashigang',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BT-41'
] );


			
State::create( [
'state_subdivision_id'=>12722,
'country_code_char2'=>'BT',
'country_code_char3'=>'BTN',
'state_subdivision_name'=>'Monggar',
'state_subdivision_alternate_names'=>'Monggar, Mongor',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BT-42'
] );


			
State::create( [
'state_subdivision_id'=>12723,
'country_code_char2'=>'BT',
'country_code_char3'=>'BTN',
'state_subdivision_name'=>'Dagana',
'state_subdivision_alternate_names'=>'Daga, Dagana',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BT-22'
] );


			
State::create( [
'state_subdivision_id'=>12724,
'country_code_char2'=>'BT',
'country_code_char3'=>'BTN',
'state_subdivision_name'=>'Bumthang',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BT-33'
] );


			
State::create( [
'state_subdivision_id'=>12725,
'country_code_char2'=>'BT',
'country_code_char3'=>'BTN',
'state_subdivision_name'=>'Tsirang',
'state_subdivision_alternate_names'=>'Chirang, Tsirang',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BT-21'
] );


			
State::create( [
'state_subdivision_id'=>12726,
'country_code_char2'=>'BT',
'country_code_char3'=>'BTN',
'state_subdivision_name'=>'Sarpang',
'state_subdivision_alternate_names'=>'Gaylegphug, Geylegphug, Sarbhang, Sarpang',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BT-31'
] );


			
State::create( [
'state_subdivision_id'=>12727,
'country_code_char2'=>'BT',
'country_code_char3'=>'BTN',
'state_subdivision_name'=>'Lhuentse',
'state_subdivision_alternate_names'=>'Lhuentse, Lhun Tshi, Lhuntshi, Lhuntsi',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BT-44'
] );


			
State::create( [
'state_subdivision_id'=>12728,
'country_code_char2'=>'BT',
'country_code_char3'=>'BTN',
'state_subdivision_name'=>'Pemagatshel',
'state_subdivision_alternate_names'=>'Pema Gatshel, Pemagatsel',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BT-43'
] );


			
State::create( [
'state_subdivision_id'=>12729,
'country_code_char2'=>'BT',
'country_code_char3'=>'BTN',
'state_subdivision_name'=>'Paro',
'state_subdivision_alternate_names'=>'Paro, Rinpung',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BT-11'
] );


			
State::create( [
'state_subdivision_id'=>12730,
'country_code_char2'=>'BT',
'country_code_char3'=>'BTN',
'state_subdivision_name'=>'Samdrup Jongkha',
'state_subdivision_alternate_names'=>'Samdruk Jongkhar, Samdrup, Samdrup Jongkha',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BT-45'
] );


			
State::create( [
'state_subdivision_id'=>12731,
'country_code_char2'=>'BT',
'country_code_char3'=>'BTN',
'state_subdivision_name'=>'Thimphu',
'state_subdivision_alternate_names'=>'Thimbu, Thimphu, Thimpu, Timbhu, Timbu, Timphu',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BT-15'
] );


			
State::create( [
'state_subdivision_id'=>12732,
'country_code_char2'=>'BT',
'country_code_char3'=>'BTN',
'state_subdivision_name'=>'Wangdue Phodrang',
'state_subdivision_alternate_names'=>'Wangdi Phodrang, Wangdiphodrang, Wangdue, Wangdue Phodrang',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BT-24'
] );


			
State::create( [
'state_subdivision_id'=>12733,
'country_code_char2'=>'BT',
'country_code_char3'=>'BTN',
'state_subdivision_name'=>'Gasa',
'state_subdivision_alternate_names'=>'Gaza',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BT-GA'
] );


			
State::create( [
'state_subdivision_id'=>12734,
'country_code_char2'=>'BT',
'country_code_char3'=>'BTN',
'state_subdivision_name'=>'Trashi Yangtse',
'state_subdivision_alternate_names'=>'Tashiyangtse',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BT-TY'
] );


			
State::create( [
'state_subdivision_id'=>12735,
'country_code_char2'=>'BT',
'country_code_char3'=>'BTN',
'state_subdivision_name'=>'Chhukha',
'state_subdivision_alternate_names'=>'Chhuka, Chuka, Chukha',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BT-12'
] );


			
State::create( [
'state_subdivision_id'=>12736,
'country_code_char2'=>'BT',
'country_code_char3'=>'BTN',
'state_subdivision_name'=>'Ha',
'state_subdivision_alternate_names'=>'Ha, Haa',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BT-13'
] );


			
State::create( [
'state_subdivision_id'=>12737,
'country_code_char2'=>'BO',
'country_code_char3'=>'BOL',
'state_subdivision_name'=>'Potosí',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'BO-P'
] );


			
State::create( [
'state_subdivision_id'=>12738,
'country_code_char2'=>'BO',
'country_code_char3'=>'BOL',
'state_subdivision_name'=>'Oruro',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'BO-O'
] );


			
State::create( [
'state_subdivision_id'=>12739,
'country_code_char2'=>'BO',
'country_code_char3'=>'BOL',
'state_subdivision_name'=>'Chuquisaca',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'BO-H'
] );


			
State::create( [
'state_subdivision_id'=>12740,
'country_code_char2'=>'BO',
'country_code_char3'=>'BOL',
'state_subdivision_name'=>'El Beni',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'BO-B'
] );


			
State::create( [
'state_subdivision_id'=>12741,
'country_code_char2'=>'BO',
'country_code_char3'=>'BOL',
'state_subdivision_name'=>'Cochabamba',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'BO-C'
] );


			
State::create( [
'state_subdivision_id'=>12742,
'country_code_char2'=>'BO',
'country_code_char3'=>'BOL',
'state_subdivision_name'=>'La Paz',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'BO-L'
] );


			
State::create( [
'state_subdivision_id'=>12743,
'country_code_char2'=>'BO',
'country_code_char3'=>'BOL',
'state_subdivision_name'=>'Pando',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'BO-N'
] );


			
State::create( [
'state_subdivision_id'=>12744,
'country_code_char2'=>'BO',
'country_code_char3'=>'BOL',
'state_subdivision_name'=>'Santa Cruz',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'BO-S'
] );


			
State::create( [
'state_subdivision_id'=>12745,
'country_code_char2'=>'BO',
'country_code_char3'=>'BOL',
'state_subdivision_name'=>'Tarija',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'BO-T'
] );


			
State::create( [
'state_subdivision_id'=>12746,
'country_code_char2'=>'BA',
'country_code_char3'=>'BIH',
'state_subdivision_name'=>'Federacija Bosna i Hercegovina',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Entity',
'state_subdivision_code'=>'BA-BIH'
] );


			
State::create( [
'state_subdivision_id'=>12747,
'country_code_char2'=>'BA',
'country_code_char3'=>'BIH',
'state_subdivision_name'=>'Republika Srpska',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Entity',
'state_subdivision_code'=>'BA-SRP'
] );


			
State::create( [
'state_subdivision_id'=>12749,
'country_code_char2'=>'BW',
'country_code_char3'=>'BWA',
'state_subdivision_name'=>'North-East',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BW-NE'
] );


			
State::create( [
'state_subdivision_id'=>12751,
'country_code_char2'=>'BW',
'country_code_char3'=>'BWA',
'state_subdivision_name'=>'South-East',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BW-SE'
] );


			
State::create( [
'state_subdivision_id'=>12759,
'country_code_char2'=>'BW',
'country_code_char3'=>'BWA',
'state_subdivision_name'=>'Ghanzi',
'state_subdivision_alternate_names'=>'Ghansi, Khanzi',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BW-GH'
] );


			
State::create( [
'state_subdivision_id'=>12762,
'country_code_char2'=>'BW',
'country_code_char3'=>'BWA',
'state_subdivision_name'=>'Kweneng',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BW-KW'
] );


			
State::create( [
'state_subdivision_id'=>12770,
'country_code_char2'=>'BW',
'country_code_char3'=>'BWA',
'state_subdivision_name'=>'Kgatleng',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BW-KL'
] );


			
State::create( [
'state_subdivision_id'=>12771,
'country_code_char2'=>'BR',
'country_code_char3'=>'BRA',
'state_subdivision_name'=>'São Paulo',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'BR-SP'
] );


			
State::create( [
'state_subdivision_id'=>12772,
'country_code_char2'=>'BR',
'country_code_char3'=>'BRA',
'state_subdivision_name'=>'Rondônia',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'BR-RO'
] );


			
State::create( [
'state_subdivision_id'=>12773,
'country_code_char2'=>'BR',
'country_code_char3'=>'BRA',
'state_subdivision_name'=>'Pernambuco',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'BR-PE'
] );


			
State::create( [
'state_subdivision_id'=>12774,
'country_code_char2'=>'BR',
'country_code_char3'=>'BRA',
'state_subdivision_name'=>'Mato Grosso do Sul',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'BR-MS'
] );


			
State::create( [
'state_subdivision_id'=>12775,
'country_code_char2'=>'BR',
'country_code_char3'=>'BRA',
'state_subdivision_name'=>'Amapá',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'BR-AP'
] );


			
State::create( [
'state_subdivision_id'=>12776,
'country_code_char2'=>'BR',
'country_code_char3'=>'BRA',
'state_subdivision_name'=>'Bahia',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'BR-BA'
] );


			
State::create( [
'state_subdivision_id'=>12777,
'country_code_char2'=>'BR',
'country_code_char3'=>'BRA',
'state_subdivision_name'=>'Distrito Federal',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'federal district',
'state_subdivision_code'=>'BR-DF'
] );


			
State::create( [
'state_subdivision_id'=>12778,
'country_code_char2'=>'BR',
'country_code_char3'=>'BRA',
'state_subdivision_name'=>'Espírito Santo',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'BR-ES'
] );


			
State::create( [
'state_subdivision_id'=>12779,
'country_code_char2'=>'BR',
'country_code_char3'=>'BRA',
'state_subdivision_name'=>'Maranhão',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'BR-MA'
] );


			
State::create( [
'state_subdivision_id'=>12780,
'country_code_char2'=>'BR',
'country_code_char3'=>'BRA',
'state_subdivision_name'=>'Mato Grosso',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'BR-MT'
] );


			
State::create( [
'state_subdivision_id'=>12781,
'country_code_char2'=>'BR',
'country_code_char3'=>'BRA',
'state_subdivision_name'=>'Minas Gerais',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'BR-MG'
] );


			
State::create( [
'state_subdivision_id'=>12782,
'country_code_char2'=>'BR',
'country_code_char3'=>'BRA',
'state_subdivision_name'=>'Paraíba',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'BR-PB'
] );


			
State::create( [
'state_subdivision_id'=>12783,
'country_code_char2'=>'BR',
'country_code_char3'=>'BRA',
'state_subdivision_name'=>'Paraná',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'BR-PR'
] );


			
State::create( [
'state_subdivision_id'=>12784,
'country_code_char2'=>'BR',
'country_code_char3'=>'BRA',
'state_subdivision_name'=>'Alagoas',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'BR-AL'
] );


			
State::create( [
'state_subdivision_id'=>12785,
'country_code_char2'=>'BR',
'country_code_char3'=>'BRA',
'state_subdivision_name'=>'Piauí',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'BR-PI'
] );


			
State::create( [
'state_subdivision_id'=>12786,
'country_code_char2'=>'BR',
'country_code_char3'=>'BRA',
'state_subdivision_name'=>'Rio de Janeiro',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'BR-RJ'
] );


			
State::create( [
'state_subdivision_id'=>12787,
'country_code_char2'=>'BR',
'country_code_char3'=>'BRA',
'state_subdivision_name'=>'Rio Grande do Sul',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'BR-RS'
] );


			
State::create( [
'state_subdivision_id'=>12788,
'country_code_char2'=>'BR',
'country_code_char3'=>'BRA',
'state_subdivision_name'=>'Roraima',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'BR-RR'
] );


			
State::create( [
'state_subdivision_id'=>12789,
'country_code_char2'=>'BR',
'country_code_char3'=>'BRA',
'state_subdivision_name'=>'Santa Catarina',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'BR-SC'
] );


			
State::create( [
'state_subdivision_id'=>12790,
'country_code_char2'=>'BR',
'country_code_char3'=>'BRA',
'state_subdivision_name'=>'Sergipe',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'BR-SE'
] );


			
State::create( [
'state_subdivision_id'=>12791,
'country_code_char2'=>'BR',
'country_code_char3'=>'BRA',
'state_subdivision_name'=>'Tocantins',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'BR-TO'
] );


			
State::create( [
'state_subdivision_id'=>12793,
'country_code_char2'=>'BR',
'country_code_char3'=>'BRA',
'state_subdivision_name'=>'Acre',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'BR-AC'
] );


			
State::create( [
'state_subdivision_id'=>12794,
'country_code_char2'=>'BR',
'country_code_char3'=>'BRA',
'state_subdivision_name'=>'Amazonas',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'BR-AM'
] );


			
State::create( [
'state_subdivision_id'=>12795,
'country_code_char2'=>'BR',
'country_code_char3'=>'BRA',
'state_subdivision_name'=>'Ceará',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'BR-CE'
] );


			
State::create( [
'state_subdivision_id'=>12796,
'country_code_char2'=>'BR',
'country_code_char3'=>'BRA',
'state_subdivision_name'=>'Goiás',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'BR-GO'
] );


			
State::create( [
'state_subdivision_id'=>12797,
'country_code_char2'=>'BR',
'country_code_char3'=>'BRA',
'state_subdivision_name'=>'Pará',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'BR-PA'
] );


			
State::create( [
'state_subdivision_id'=>12798,
'country_code_char2'=>'BR',
'country_code_char3'=>'BRA',
'state_subdivision_name'=>'Rio Grande do Norte',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'BR-RN'
] );


			
State::create( [
'state_subdivision_id'=>12804,
'country_code_char2'=>'BN',
'country_code_char3'=>'BRN',
'state_subdivision_name'=>'Tutong',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BN-TU'
] );


			
State::create( [
'state_subdivision_id'=>12805,
'country_code_char2'=>'BN',
'country_code_char3'=>'BRN',
'state_subdivision_name'=>'Belait',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BN-BE'
] );


			
State::create( [
'state_subdivision_id'=>12806,
'country_code_char2'=>'BN',
'country_code_char3'=>'BRN',
'state_subdivision_name'=>'Temburong',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BN-TE'
] );


			
State::create( [
'state_subdivision_id'=>12807,
'country_code_char2'=>'BN',
'country_code_char3'=>'BRN',
'state_subdivision_name'=>'Brunei-Muara',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'BN-BM'
] );


			
State::create( [
'state_subdivision_id'=>12808,
'country_code_char2'=>'BG',
'country_code_char3'=>'BGR',
'state_subdivision_name'=>'Veliko Tarnovo',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BG-04'
] );


			
State::create( [
'state_subdivision_id'=>12809,
'country_code_char2'=>'BG',
'country_code_char3'=>'BGR',
'state_subdivision_name'=>'Smolyan',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BG-21'
] );


			
State::create( [
'state_subdivision_id'=>12810,
'country_code_char2'=>'BG',
'country_code_char3'=>'BGR',
'state_subdivision_name'=>'Razgrad',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BG-17'
] );


			
State::create( [
'state_subdivision_id'=>12811,
'country_code_char2'=>'BG',
'country_code_char3'=>'BGR',
'state_subdivision_name'=>'Montana',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BG-12'
] );


			
State::create( [
'state_subdivision_id'=>12812,
'country_code_char2'=>'BG',
'country_code_char3'=>'BGR',
'state_subdivision_name'=>'Yambol',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BG-28'
] );


			
State::create( [
'state_subdivision_id'=>12813,
'country_code_char2'=>'BG',
'country_code_char3'=>'BGR',
'state_subdivision_name'=>'Burgas',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BG-02'
] );


			
State::create( [
'state_subdivision_id'=>12814,
'country_code_char2'=>'BG',
'country_code_char3'=>'BGR',
'state_subdivision_name'=>'Plovdiv',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BG-16'
] );


			
State::create( [
'state_subdivision_id'=>12815,
'country_code_char2'=>'BG',
'country_code_char3'=>'BGR',
'state_subdivision_name'=>'Ruse',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BG-18'
] );


			
State::create( [
'state_subdivision_id'=>12816,
'country_code_char2'=>'BG',
'country_code_char3'=>'BGR',
'state_subdivision_name'=>'Sliven',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BG-20'
] );


			
State::create( [
'state_subdivision_id'=>12817,
'country_code_char2'=>'BG',
'country_code_char3'=>'BGR',
'state_subdivision_name'=>'Sofia-Grad',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BG-22'
] );


			
State::create( [
'state_subdivision_id'=>12818,
'country_code_char2'=>'BG',
'country_code_char3'=>'BGR',
'state_subdivision_name'=>'Stara Zagora',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BG-24'
] );


			
State::create( [
'state_subdivision_id'=>12819,
'country_code_char2'=>'BG',
'country_code_char3'=>'BGR',
'state_subdivision_name'=>'Šumen',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BG-27'
] );


			
State::create( [
'state_subdivision_id'=>12820,
'country_code_char2'=>'BG',
'country_code_char3'=>'BGR',
'state_subdivision_name'=>'Varna',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BG-03'
] );


			
State::create( [
'state_subdivision_id'=>12821,
'country_code_char2'=>'BG',
'country_code_char3'=>'BGR',
'state_subdivision_name'=>'Vidin',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BG-05'
] );


			
State::create( [
'state_subdivision_id'=>12822,
'country_code_char2'=>'BG',
'country_code_char3'=>'BGR',
'state_subdivision_name'=>'Vratsa',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BG-06'
] );


			
State::create( [
'state_subdivision_id'=>12823,
'country_code_char2'=>'BG',
'country_code_char3'=>'BGR',
'state_subdivision_name'=>'Gabrovo',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BG-07'
] );


			
State::create( [
'state_subdivision_id'=>12824,
'country_code_char2'=>'BG',
'country_code_char3'=>'BGR',
'state_subdivision_name'=>'Haskovo',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BG-26'
] );


			
State::create( [
'state_subdivision_id'=>12825,
'country_code_char2'=>'BG',
'country_code_char3'=>'BGR',
'state_subdivision_name'=>'Kardzhali',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BG-09'
] );


			
State::create( [
'state_subdivision_id'=>12826,
'country_code_char2'=>'BG',
'country_code_char3'=>'BGR',
'state_subdivision_name'=>'Lovech',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BG-11'
] );


			
State::create( [
'state_subdivision_id'=>12827,
'country_code_char2'=>'BG',
'country_code_char3'=>'BGR',
'state_subdivision_name'=>'Pazardzhik',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BG-13'
] );


			
State::create( [
'state_subdivision_id'=>12828,
'country_code_char2'=>'BG',
'country_code_char3'=>'BGR',
'state_subdivision_name'=>'Pleven',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BG-15'
] );


			
State::create( [
'state_subdivision_id'=>12829,
'country_code_char2'=>'BG',
'country_code_char3'=>'BGR',
'state_subdivision_name'=>'Blagoevgrad',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BG-01'
] );


			
State::create( [
'state_subdivision_id'=>12830,
'country_code_char2'=>'BG',
'country_code_char3'=>'BGR',
'state_subdivision_name'=>'Dobrich',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BG-08'
] );


			
State::create( [
'state_subdivision_id'=>12831,
'country_code_char2'=>'BG',
'country_code_char3'=>'BGR',
'state_subdivision_name'=>'Kjustendil',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BG-10'
] );


			
State::create( [
'state_subdivision_id'=>12832,
'country_code_char2'=>'BG',
'country_code_char3'=>'BGR',
'state_subdivision_name'=>'Pernik',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BG-14'
] );


			
State::create( [
'state_subdivision_id'=>12833,
'country_code_char2'=>'BG',
'country_code_char3'=>'BGR',
'state_subdivision_name'=>'Silistra',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BG-19'
] );


			
State::create( [
'state_subdivision_id'=>12834,
'country_code_char2'=>'BG',
'country_code_char3'=>'BGR',
'state_subdivision_name'=>'Sofia',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BG-23'
] );


			
State::create( [
'state_subdivision_id'=>12835,
'country_code_char2'=>'BG',
'country_code_char3'=>'BGR',
'state_subdivision_name'=>'Targovishte',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'BG-25'
] );


			
State::create( [
'state_subdivision_id'=>12837,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Loroum',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-LOR'
] );


			
State::create( [
'state_subdivision_id'=>12838,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Nahouri',
'state_subdivision_alternate_names'=>'Naouri',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-NAO'
] );


			
State::create( [
'state_subdivision_id'=>12839,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Noumbiel',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-NOU'
] );


			
State::create( [
'state_subdivision_id'=>12840,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Oudalan',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-OUD'
] );


			
State::create( [
'state_subdivision_id'=>12841,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Sanguié',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-SNG'
] );


			
State::create( [
'state_subdivision_id'=>12842,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Séno',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-SEN'
] );


			
State::create( [
'state_subdivision_id'=>12843,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Sissili',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-SIS'
] );


			
State::create( [
'state_subdivision_id'=>12844,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Soum',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-SOM'
] );


			
State::create( [
'state_subdivision_id'=>12845,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Sourou',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-SOR'
] );


			
State::create( [
'state_subdivision_id'=>12846,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Balé',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-BAL'
] );


			
State::create( [
'state_subdivision_id'=>12847,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Banwa',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-BAN'
] );


			
State::create( [
'state_subdivision_id'=>12848,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Boulgou',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-BLG'
] );


			
State::create( [
'state_subdivision_id'=>12849,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Comoé',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-COM'
] );


			
State::create( [
'state_subdivision_id'=>12850,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Gourma',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-GOU'
] );


			
State::create( [
'state_subdivision_id'=>12851,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Ioba',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-IOB'
] );


			
State::create( [
'state_subdivision_id'=>12852,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Kénédougou',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-KEN'
] );


			
State::create( [
'state_subdivision_id'=>12853,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Kossi',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-KOS'
] );


			
State::create( [
'state_subdivision_id'=>12854,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Kouritenga',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-KOT'
] );


			
State::create( [
'state_subdivision_id'=>12855,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Bam',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-BAM'
] );


			
State::create( [
'state_subdivision_id'=>12856,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Bazèga',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-BAZ'
] );


			
State::create( [
'state_subdivision_id'=>12857,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Bougouriba',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-BGR'
] );


			
State::create( [
'state_subdivision_id'=>12858,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Boulkiemdé',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-BLK'
] );


			
State::create( [
'state_subdivision_id'=>12859,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Ganzourgou',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-GAN'
] );


			
State::create( [
'state_subdivision_id'=>12860,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Gnagna',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-GNA'
] );


			
State::create( [
'state_subdivision_id'=>12861,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Houet',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-HOU'
] );


			
State::create( [
'state_subdivision_id'=>12862,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Kadiogo',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-KAD'
] );


			
State::create( [
'state_subdivision_id'=>12863,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Komondjari',
'state_subdivision_alternate_names'=>'Komandjoari, Komondjari',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-KMD'
] );


			
State::create( [
'state_subdivision_id'=>12864,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Kompienga',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-KMP'
] );


			
State::create( [
'state_subdivision_id'=>12865,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Koulpélogo',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-KOP'
] );


			
State::create( [
'state_subdivision_id'=>12866,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Kourwéogo',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-KOW'
] );


			
State::create( [
'state_subdivision_id'=>12867,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Léraba',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-LER'
] );


			
State::create( [
'state_subdivision_id'=>12868,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Mouhoun',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-MOU'
] );


			
State::create( [
'state_subdivision_id'=>12869,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Namentenga',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-NAM'
] );


			
State::create( [
'state_subdivision_id'=>12870,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Nayala',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-NAY'
] );


			
State::create( [
'state_subdivision_id'=>12871,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Oubritenga',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-OUB'
] );


			
State::create( [
'state_subdivision_id'=>12872,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Passoré',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-PAS'
] );


			
State::create( [
'state_subdivision_id'=>12873,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Poni',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-PON'
] );


			
State::create( [
'state_subdivision_id'=>12874,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Sanmatenga',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-SMT'
] );


			
State::create( [
'state_subdivision_id'=>12876,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Ziro',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-ZIR'
] );


			
State::create( [
'state_subdivision_id'=>12877,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Yatenga',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-YAT'
] );


			
State::create( [
'state_subdivision_id'=>12878,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Yagha',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-YAG'
] );


			
State::create( [
'state_subdivision_id'=>12879,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Tapoa',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-TAP'
] );


			
State::create( [
'state_subdivision_id'=>12880,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Tui',
'state_subdivision_alternate_names'=>'Tui',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-TUI'
] );


			
State::create( [
'state_subdivision_id'=>12881,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Zondoma',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-ZON'
] );


			
State::create( [
'state_subdivision_id'=>12882,
'country_code_char2'=>'BF',
'country_code_char3'=>'BFA',
'state_subdivision_name'=>'Zoundwéogo',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BF-ZOU'
] );


			
State::create( [
'state_subdivision_id'=>12883,
'country_code_char2'=>'BI',
'country_code_char3'=>'BDI',
'state_subdivision_name'=>'Ruyigi',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BI-RY'
] );


			
State::create( [
'state_subdivision_id'=>12885,
'country_code_char2'=>'BI',
'country_code_char3'=>'BDI',
'state_subdivision_name'=>'Cankuzo',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BI-CA'
] );


			
State::create( [
'state_subdivision_id'=>12886,
'country_code_char2'=>'BI',
'country_code_char3'=>'BDI',
'state_subdivision_name'=>'Gitega',
'state_subdivision_alternate_names'=>'Kitega',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BI-GI'
] );


			
State::create( [
'state_subdivision_id'=>12887,
'country_code_char2'=>'BI',
'country_code_char3'=>'BDI',
'state_subdivision_name'=>'Karuzi',
'state_subdivision_alternate_names'=>'Karusi',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BI-KR'
] );


			
State::create( [
'state_subdivision_id'=>12888,
'country_code_char2'=>'BI',
'country_code_char3'=>'BDI',
'state_subdivision_name'=>'Kirundo',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BI-KI'
] );


			
State::create( [
'state_subdivision_id'=>12889,
'country_code_char2'=>'BI',
'country_code_char3'=>'BDI',
'state_subdivision_name'=>'Makamba',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BI-MA'
] );


			
State::create( [
'state_subdivision_id'=>12890,
'country_code_char2'=>'BI',
'country_code_char3'=>'BDI',
'state_subdivision_name'=>'Muyinga',
'state_subdivision_alternate_names'=>'Muhinga',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BI-MY'
] );


			
State::create( [
'state_subdivision_id'=>12891,
'country_code_char2'=>'BI',
'country_code_char3'=>'BDI',
'state_subdivision_name'=>'Ngozi',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BI-NG'
] );


			
State::create( [
'state_subdivision_id'=>12892,
'country_code_char2'=>'BI',
'country_code_char3'=>'BDI',
'state_subdivision_name'=>'Rutana',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BI-RT'
] );


			
State::create( [
'state_subdivision_id'=>12893,
'country_code_char2'=>'BI',
'country_code_char3'=>'BDI',
'state_subdivision_name'=>'Bubanza',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BI-BB'
] );


			
State::create( [
'state_subdivision_id'=>12894,
'country_code_char2'=>'BI',
'country_code_char3'=>'BDI',
'state_subdivision_name'=>'Kayanza',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BI-KY'
] );


			
State::create( [
'state_subdivision_id'=>12895,
'country_code_char2'=>'BI',
'country_code_char3'=>'BDI',
'state_subdivision_name'=>'Bururi',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BI-BR'
] );


			
State::create( [
'state_subdivision_id'=>12896,
'country_code_char2'=>'BI',
'country_code_char3'=>'BDI',
'state_subdivision_name'=>'Cibitoke',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BI-CI'
] );


			
State::create( [
'state_subdivision_id'=>12897,
'country_code_char2'=>'BI',
'country_code_char3'=>'BDI',
'state_subdivision_name'=>'Muramvya',
'state_subdivision_alternate_names'=>'Muramuya',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BI-MU'
] );


			
State::create( [
'state_subdivision_id'=>12898,
'country_code_char2'=>'BI',
'country_code_char3'=>'BDI',
'state_subdivision_name'=>'Mwaro',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'BI-MW'
] );


			
State::create( [
'state_subdivision_id'=>12900,
'country_code_char2'=>'KH',
'country_code_char3'=>'KHM',
'state_subdivision_name'=>'Pousaat [Pouthisat]',
'state_subdivision_alternate_names'=>'Poŭthĭsăt, Pursat',
'primary_level_name'=>'province',
'state_subdivision_code'=>'KH-15'
] );


			
State::create( [
'state_subdivision_id'=>12901,
'country_code_char2'=>'KH',
'country_code_char3'=>'KHM',
'state_subdivision_name'=>'Otdar Mean Chey [Otdâr Méanchey] ',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'KH-22'
] );


			
State::create( [
'state_subdivision_id'=>12902,
'country_code_char2'=>'KH',
'country_code_char3'=>'KHM',
'state_subdivision_name'=>'Kampong Thum [Kâmpóng Thum]',
'state_subdivision_alternate_names'=>'Kompong Thom, Kompong Thum',
'primary_level_name'=>'province',
'state_subdivision_code'=>'KH-6'
] );


			
State::create( [
'state_subdivision_id'=>12903,
'country_code_char2'=>'KH',
'country_code_char3'=>'KHM',
'state_subdivision_name'=>'Kampot [Kâmpôt]',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'KH-7'
] );


			
State::create( [
'state_subdivision_id'=>12904,
'country_code_char2'=>'KH',
'country_code_char3'=>'KHM',
'state_subdivision_name'=>'Kandaal [Kândal]',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'KH-8'
] );


			
State::create( [
'state_subdivision_id'=>12905,
'country_code_char2'=>'KH',
'country_code_char3'=>'KHM',
'state_subdivision_name'=>'Kaoh Kong [Kaôh Kong]',
'state_subdivision_alternate_names'=>'Koh Kong',
'primary_level_name'=>'province',
'state_subdivision_code'=>'KH-9'
] );


			
State::create( [
'state_subdivision_id'=>12906,
'country_code_char2'=>'KH',
'country_code_char3'=>'KHM',
'state_subdivision_name'=>'Kracheh [Krâchéh]',
'state_subdivision_alternate_names'=>'Kratié',
'primary_level_name'=>'province',
'state_subdivision_code'=>'KH-10'
] );


			
State::create( [
'state_subdivision_id'=>12907,
'country_code_char2'=>'KH',
'country_code_char3'=>'KHM',
'state_subdivision_name'=>'Krong Kaeb [Krong Kêb]',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'autonomous municipality',
'state_subdivision_code'=>'KH-23'
] );


			
State::create( [
'state_subdivision_id'=>12908,
'country_code_char2'=>'KH',
'country_code_char3'=>'KHM',
'state_subdivision_name'=>'Krong Pailin [Krong Pailin]',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'autonomous municipality',
'state_subdivision_code'=>'KH-24'
] );


			
State::create( [
'state_subdivision_id'=>12909,
'country_code_char2'=>'KH',
'country_code_char3'=>'KHM',
'state_subdivision_name'=>'Krong Preah Sihanouk [Krong Preah Sihanouk]',
'state_subdivision_alternate_names'=>'Preah Seihânu, Sihanoukville',
'primary_level_name'=>'autonomous municipality',
'state_subdivision_code'=>'KH-18'
] );


			
State::create( [
'state_subdivision_id'=>12910,
'country_code_char2'=>'KH',
'country_code_char3'=>'KHM',
'state_subdivision_name'=>'Mondol Kiri [Môndól Kiri]',
'state_subdivision_alternate_names'=>'Mondolkiri',
'primary_level_name'=>'province',
'state_subdivision_code'=>'KH-11'
] );


			
State::create( [
'state_subdivision_id'=>12911,
'country_code_char2'=>'KH',
'country_code_char3'=>'KHM',
'state_subdivision_name'=>'Banteay Mean Chey [Bântéay Méanchey]',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'KH-1'
] );


			
State::create( [
'state_subdivision_id'=>12912,
'country_code_char2'=>'KH',
'country_code_char3'=>'KHM',
'state_subdivision_name'=>'Kampong Chaam [Kâmpóng Cham]',
'state_subdivision_alternate_names'=>'Kompong Cham',
'primary_level_name'=>'province',
'state_subdivision_code'=>'KH-3'
] );


			
State::create( [
'state_subdivision_id'=>12913,
'country_code_char2'=>'KH',
'country_code_char3'=>'KHM',
'state_subdivision_name'=>'Preah Vihear [Preah Vihéar]',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'KH-13'
] );


			
State::create( [
'state_subdivision_id'=>12914,
'country_code_char2'=>'KH',
'country_code_char3'=>'KHM',
'state_subdivision_name'=>'Prey Veaeng [Prey Vêng]',
'state_subdivision_alternate_names'=>'Prey Vêng',
'primary_level_name'=>'province',
'state_subdivision_code'=>'KH-14'
] );


			
State::create( [
'state_subdivision_id'=>12915,
'country_code_char2'=>'KH',
'country_code_char3'=>'KHM',
'state_subdivision_name'=>'Siem Reab [Siemréab]',
'state_subdivision_alternate_names'=>'Siem Reap, Siemréab',
'primary_level_name'=>'province',
'state_subdivision_code'=>'KH-17'
] );


			
State::create( [
'state_subdivision_id'=>12916,
'country_code_char2'=>'KH',
'country_code_char3'=>'KHM',
'state_subdivision_name'=>'Svaay Rieng [Svay Rieng]',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'KH-20'
] );


			
State::create( [
'state_subdivision_id'=>12918,
'country_code_char2'=>'KH',
'country_code_char3'=>'KHM',
'state_subdivision_name'=>'Baat Dambang [Batdâmbâng]',
'state_subdivision_alternate_names'=>'Batdâmbâng, Battambang',
'primary_level_name'=>'province',
'state_subdivision_code'=>'KH-2'
] );


			
State::create( [
'state_subdivision_id'=>12919,
'country_code_char2'=>'KH',
'country_code_char3'=>'KHM',
'state_subdivision_name'=>'Kampong Chhnang [Kâmpóng Chhnang]',
'state_subdivision_alternate_names'=>'Kompong Chhnang',
'primary_level_name'=>'province',
'state_subdivision_code'=>'KH-4'
] );


			
State::create( [
'state_subdivision_id'=>12920,
'country_code_char2'=>'KH',
'country_code_char3'=>'KHM',
'state_subdivision_name'=>'Kampong Spueu [Kâmpóng Spœ]',
'state_subdivision_alternate_names'=>'Kompong Speu, Kompong Spoe',
'primary_level_name'=>'province',
'state_subdivision_code'=>'KH-5'
] );


			
State::create( [
'state_subdivision_id'=>12921,
'country_code_char2'=>'KH',
'country_code_char3'=>'KHM',
'state_subdivision_name'=>'Phnom Penh [Phnum Pénh]',
'state_subdivision_alternate_names'=>'Phnom Penh',
'primary_level_name'=>'autonomous municipality',
'state_subdivision_code'=>'KH-12'
] );


			
State::create( [
'state_subdivision_id'=>12922,
'country_code_char2'=>'KH',
'country_code_char3'=>'KHM',
'state_subdivision_name'=>'Rotanak Kiri [Rôtânôkiri]',
'state_subdivision_alternate_names'=>'Ratanakiri, Rotanokiri, Rôtanah Kiri',
'primary_level_name'=>'province',
'state_subdivision_code'=>'KH-16'
] );


			
State::create( [
'state_subdivision_id'=>12924,
'country_code_char2'=>'KH',
'country_code_char3'=>'KHM',
'state_subdivision_name'=>'Taakaev [Takêv]',
'state_subdivision_alternate_names'=>'Takeo, Takêv',
'primary_level_name'=>'province',
'state_subdivision_code'=>'KH-21'
] );


			
State::create( [
'state_subdivision_id'=>12925,
'country_code_char2'=>'KH',
'country_code_char3'=>'KHM',
'state_subdivision_name'=>'Stueng Traeng [Stœ?ng Trêng]',
'state_subdivision_alternate_names'=>'Stoeng Trêng, Stung Treng',
'primary_level_name'=>'province',
'state_subdivision_code'=>'KH-19'
] );


			
State::create( [
'state_subdivision_id'=>12926,
'country_code_char2'=>'CM',
'country_code_char3'=>'CMR',
'state_subdivision_name'=>'South-West',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CM-SW'
] );


			
State::create( [
'state_subdivision_id'=>12927,
'country_code_char2'=>'CM',
'country_code_char3'=>'CMR',
'state_subdivision_name'=>'North-West',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CM-NW'
] );


			
State::create( [
'state_subdivision_id'=>12928,
'country_code_char2'=>'CM',
'country_code_char3'=>'CMR',
'state_subdivision_name'=>'Centre',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CM-CE'
] );


			
State::create( [
'state_subdivision_id'=>12929,
'country_code_char2'=>'CM',
'country_code_char3'=>'CMR',
'state_subdivision_name'=>'Littoral',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CM-LT'
] );


			
State::create( [
'state_subdivision_id'=>12930,
'country_code_char2'=>'CM',
'country_code_char3'=>'CMR',
'state_subdivision_name'=>'West',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CM-OU'
] );


			
State::create( [
'state_subdivision_id'=>12931,
'country_code_char2'=>'CM',
'country_code_char3'=>'CMR',
'state_subdivision_name'=>'North',
'state_subdivision_alternate_names'=>'Bénoué',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CM-NO'
] );


			
State::create( [
'state_subdivision_id'=>12932,
'country_code_char2'=>'CM',
'country_code_char3'=>'CMR',
'state_subdivision_name'=>'Adamaoua',
'state_subdivision_alternate_names'=>'Adamawa',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CM-AD'
] );


			
State::create( [
'state_subdivision_id'=>12933,
'country_code_char2'=>'CM',
'country_code_char3'=>'CMR',
'state_subdivision_name'=>'East',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CM-ES'
] );


			
State::create( [
'state_subdivision_id'=>12934,
'country_code_char2'=>'CM',
'country_code_char3'=>'CMR',
'state_subdivision_name'=>'Far North',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CM-EN'
] );


			
State::create( [
'state_subdivision_id'=>12935,
'country_code_char2'=>'CM',
'country_code_char3'=>'CMR',
'state_subdivision_name'=>'South',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CM-SU'
] );


			
State::create( [
'state_subdivision_id'=>12936,
'country_code_char2'=>'CA',
'country_code_char3'=>'CAN',
'state_subdivision_name'=>'Saskatchewan',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CA-SK'
] );


			
State::create( [
'state_subdivision_id'=>12937,
'country_code_char2'=>'CA',
'country_code_char3'=>'CAN',
'state_subdivision_name'=>'New Brunswick',
'state_subdivision_alternate_names'=>'Nouveau-Brunswick',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CA-NB'
] );


			
State::create( [
'state_subdivision_id'=>12938,
'country_code_char2'=>'CA',
'country_code_char3'=>'CAN',
'state_subdivision_name'=>'British Columbia',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CA-BC'
] );


			
State::create( [
'state_subdivision_id'=>12939,
'country_code_char2'=>'CA',
'country_code_char3'=>'CAN',
'state_subdivision_name'=>'Northwest Territories',
'state_subdivision_alternate_names'=>'Territoires du Nord-Ouest',
'primary_level_name'=>'territory',
'state_subdivision_code'=>'CA-NT'
] );


			
State::create( [
'state_subdivision_id'=>12940,
'country_code_char2'=>'CA',
'country_code_char3'=>'CAN',
'state_subdivision_name'=>'Alberta',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CA-AB'
] );


			
State::create( [
'state_subdivision_id'=>12941,
'country_code_char2'=>'CA',
'country_code_char3'=>'CAN',
'state_subdivision_name'=>'Manitoba',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CA-MB'
] );


			
State::create( [
'state_subdivision_id'=>12942,
'country_code_char2'=>'CA',
'country_code_char3'=>'CAN',
'state_subdivision_name'=>'Newfoundland and Labrador',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CA-NL'
] );


			
State::create( [
'state_subdivision_id'=>12943,
'country_code_char2'=>'CA',
'country_code_char3'=>'CAN',
'state_subdivision_name'=>'Nova Scotia',
'state_subdivision_alternate_names'=>'Nouvelle-Écosse',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CA-NS'
] );


			
State::create( [
'state_subdivision_id'=>12944,
'country_code_char2'=>'CA',
'country_code_char3'=>'CAN',
'state_subdivision_name'=>'Nunavut',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'territory',
'state_subdivision_code'=>'CA-NU'
] );


			
State::create( [
'state_subdivision_id'=>12945,
'country_code_char2'=>'CA',
'country_code_char3'=>'CAN',
'state_subdivision_name'=>'Prince Edward Island',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CA-PE'
] );


			
State::create( [
'state_subdivision_id'=>12946,
'country_code_char2'=>'CA',
'country_code_char3'=>'CAN',
'state_subdivision_name'=>'Quebec',
'state_subdivision_alternate_names'=>'Québec',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CA-QC'
] );


			
State::create( [
'state_subdivision_id'=>12947,
'country_code_char2'=>'CA',
'country_code_char3'=>'CAN',
'state_subdivision_name'=>'Yukon Territory',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'territory',
'state_subdivision_code'=>'CA-YT'
] );


			
State::create( [
'state_subdivision_id'=>12948,
'country_code_char2'=>'CA',
'country_code_char3'=>'CAN',
'state_subdivision_name'=>'Ontario',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CA-ON'
] );


			
State::create( [
'state_subdivision_id'=>12950,
'country_code_char2'=>'CV',
'country_code_char3'=>'CPV',
'state_subdivision_name'=>'São Vicente',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'municipality',
'state_subdivision_code'=>'CV-SV'
] );


			
State::create( [
'state_subdivision_id'=>12953,
'country_code_char2'=>'CV',
'country_code_char3'=>'CPV',
'state_subdivision_name'=>'Boa Vista',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'municipality',
'state_subdivision_code'=>'CV-BV'
] );


			
State::create( [
'state_subdivision_id'=>12954,
'country_code_char2'=>'CV',
'country_code_char3'=>'CPV',
'state_subdivision_name'=>'Maio',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'municipality',
'state_subdivision_code'=>'CV-MA'
] );


			
State::create( [
'state_subdivision_id'=>12955,
'country_code_char2'=>'CV',
'country_code_char3'=>'CPV',
'state_subdivision_name'=>'Ribeira Grande',
'state_subdivision_alternate_names'=>'Santiago',
'primary_level_name'=>'municipality',
'state_subdivision_code'=>'CV-RG'
] );


			
State::create( [
'state_subdivision_id'=>12956,
'country_code_char2'=>'CV',
'country_code_char3'=>'CPV',
'state_subdivision_name'=>'São Lourenço dos Órgãos',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'municipality',
'state_subdivision_code'=>'CV-SL'
] );


			
State::create( [
'state_subdivision_id'=>12957,
'country_code_char2'=>'CV',
'country_code_char3'=>'CPV',
'state_subdivision_name'=>'Brava',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'municipality',
'state_subdivision_code'=>'CV-BR'
] );


			
State::create( [
'state_subdivision_id'=>12958,
'country_code_char2'=>'KY',
'country_code_char3'=>'CYM',
'state_subdivision_name'=>'Little Cayman',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'Ky-05~'
] );


			
State::create( [
'state_subdivision_id'=>12962,
'country_code_char2'=>'KY',
'country_code_char3'=>'CYM',
'state_subdivision_name'=>'Cayman Brac',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'KY-02~'
] );


			
State::create( [
'state_subdivision_id'=>12963,
'country_code_char2'=>'CF',
'country_code_char3'=>'CAF',
'state_subdivision_name'=>'Sangha',
'state_subdivision_alternate_names'=>'Mbaeré, Sangha',
'primary_level_name'=>'economic prefecture',
'state_subdivision_code'=>'CF-SE'
] );


			
State::create( [
'state_subdivision_id'=>12964,
'country_code_char2'=>'CF',
'country_code_char3'=>'CAF',
'state_subdivision_name'=>'Ombella-Mpoko',
'state_subdivision_alternate_names'=>'Ombella-Mʿpoko, Ombelle Mpoko',
'primary_level_name'=>'prefecture',
'state_subdivision_code'=>'CF-MP'
] );


			
State::create( [
'state_subdivision_id'=>12965,
'country_code_char2'=>'CF',
'country_code_char3'=>'CAF',
'state_subdivision_name'=>'Gribingui',
'state_subdivision_alternate_names'=>'Gribingui, Nana-Grébisi',
'primary_level_name'=>'economic prefecture',
'state_subdivision_code'=>'CF-KB'
] );


			
State::create( [
'state_subdivision_id'=>12966,
'country_code_char2'=>'CF',
'country_code_char3'=>'CAF',
'state_subdivision_name'=>'Haute-Sangha / Mambéré-Kadéï',
'state_subdivision_alternate_names'=>'Haut-Sangha',
'primary_level_name'=>'prefecture',
'state_subdivision_code'=>'CF-HS'
] );


			
State::create( [
'state_subdivision_id'=>12967,
'country_code_char2'=>'CF',
'country_code_char3'=>'CAF',
'state_subdivision_name'=>'Kémo-Gribingui',
'state_subdivision_alternate_names'=>'Kémo Gribingui',
'primary_level_name'=>'prefecture',
'state_subdivision_code'=>'CF-KG'
] );


			
State::create( [
'state_subdivision_id'=>12968,
'country_code_char2'=>'CF',
'country_code_char3'=>'CAF',
'state_subdivision_name'=>'Haute-Kotto',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'prefecture',
'state_subdivision_code'=>'CF-HK'
] );


			
State::create( [
'state_subdivision_id'=>12969,
'country_code_char2'=>'CF',
'country_code_char3'=>'CAF',
'state_subdivision_name'=>'Bangui',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'commune',
'state_subdivision_code'=>'CF-BGF'
] );


			
State::create( [
'state_subdivision_id'=>12970,
'country_code_char2'=>'CF',
'country_code_char3'=>'CAF',
'state_subdivision_name'=>'Ouham-Pendé',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'prefecture',
'state_subdivision_code'=>'CF-OP'
] );


			
State::create( [
'state_subdivision_id'=>12971,
'country_code_char2'=>'CF',
'country_code_char3'=>'CAF',
'state_subdivision_name'=>'Vakaga',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'prefecture',
'state_subdivision_code'=>'CF-VK'
] );


			
State::create( [
'state_subdivision_id'=>12972,
'country_code_char2'=>'CF',
'country_code_char3'=>'CAF',
'state_subdivision_name'=>'Bamingui-Bangoran',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'prefecture',
'state_subdivision_code'=>'CF-BB'
] );


			
State::create( [
'state_subdivision_id'=>12973,
'country_code_char2'=>'CF',
'country_code_char3'=>'CAF',
'state_subdivision_name'=>'Basse-Kotto',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'prefecture',
'state_subdivision_code'=>'CF-BK'
] );


			
State::create( [
'state_subdivision_id'=>12974,
'country_code_char2'=>'CF',
'country_code_char3'=>'CAF',
'state_subdivision_name'=>'Haut-Mbomou',
'state_subdivision_alternate_names'=>'Haut-Mʿbomou',
'primary_level_name'=>'prefecture',
'state_subdivision_code'=>'CF-HM'
] );


			
State::create( [
'state_subdivision_id'=>12975,
'country_code_char2'=>'CF',
'country_code_char3'=>'CAF',
'state_subdivision_name'=>'Lobaye',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'prefecture',
'state_subdivision_code'=>'CF-LB'
] );


			
State::create( [
'state_subdivision_id'=>12976,
'country_code_char2'=>'CF',
'country_code_char3'=>'CAF',
'state_subdivision_name'=>'Mbomou',
'state_subdivision_alternate_names'=>'Mʿbomou',
'primary_level_name'=>'prefecture',
'state_subdivision_code'=>'CF-MB'
] );


			
State::create( [
'state_subdivision_id'=>12977,
'country_code_char2'=>'CF',
'country_code_char3'=>'CAF',
'state_subdivision_name'=>'Nana-Mambéré',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'prefecture',
'state_subdivision_code'=>'CF-NM'
] );


			
State::create( [
'state_subdivision_id'=>12978,
'country_code_char2'=>'CF',
'country_code_char3'=>'CAF',
'state_subdivision_name'=>'Ouham',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'prefecture',
'state_subdivision_code'=>'CF-AC'
] );


			
State::create( [
'state_subdivision_id'=>12979,
'country_code_char2'=>'CF',
'country_code_char3'=>'CAF',
'state_subdivision_name'=>'Ouaka',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'prefecture',
'state_subdivision_code'=>'CF-UK'
] );


			
State::create( [
'state_subdivision_id'=>12980,
'country_code_char2'=>'TD',
'country_code_char3'=>'TCD',
'state_subdivision_name'=>'Tānjilī',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'TD-TA'
] );


			
State::create( [
'state_subdivision_id'=>12981,
'country_code_char2'=>'TD',
'country_code_char3'=>'TCD',
'state_subdivision_name'=>'Al Baṭḩah',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'TD-BA'
] );


			
State::create( [
'state_subdivision_id'=>12983,
'country_code_char2'=>'TD',
'country_code_char3'=>'TCD',
'state_subdivision_name'=>'Qīrā',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'TD-GR'
] );


			
State::create( [
'state_subdivision_id'=>12984,
'country_code_char2'=>'TD',
'country_code_char3'=>'TCD',
'state_subdivision_name'=>'Kānim',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'TD-KA'
] );


			
State::create( [
'state_subdivision_id'=>12985,
'country_code_char2'=>'TD',
'country_code_char3'=>'TCD',
'state_subdivision_name'=>'Al Buḩayrah',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'TD-LC'
] );


			
State::create( [
'state_subdivision_id'=>12986,
'country_code_char2'=>'TD',
'country_code_char3'=>'TCD',
'state_subdivision_name'=>'Lūqūn al Gharbī',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'TD-LO'
] );


			
State::create( [
'state_subdivision_id'=>12987,
'country_code_char2'=>'TD',
'country_code_char3'=>'TCD',
'state_subdivision_name'=>'Lūqūn ash Sharqī',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'TD-LR'
] );


			
State::create( [
'state_subdivision_id'=>12988,
'country_code_char2'=>'TD',
'country_code_char3'=>'TCD',
'state_subdivision_name'=>'Waddāy',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'TD-OD'
] );


			
State::create( [
'state_subdivision_id'=>12990,
'country_code_char2'=>'TD',
'country_code_char3'=>'TCD',
'state_subdivision_name'=>'Shārī Bāqirmī',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'TD-CB'
] );


			
State::create( [
'state_subdivision_id'=>12991,
'country_code_char2'=>'TD',
'country_code_char3'=>'TCD',
'state_subdivision_name'=>'Shārī al Awsaṭ',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'TD-MC'
] );


			
State::create( [
'state_subdivision_id'=>12992,
'country_code_char2'=>'TD',
'country_code_char3'=>'TCD',
'state_subdivision_name'=>'Salāmāt',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'TD-SA'
] );


			
State::create( [
'state_subdivision_id'=>12994,
'country_code_char2'=>'CL',
'country_code_char3'=>'CHL',
'state_subdivision_name'=>'Tarapacá',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CL-TA'
] );


			
State::create( [
'state_subdivision_id'=>12995,
'country_code_char2'=>'CL',
'country_code_char3'=>'CHL',
'state_subdivision_name'=>'Maule',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CL-ML'
] );


			
State::create( [
'state_subdivision_id'=>12996,
'country_code_char2'=>'CL',
'country_code_char3'=>'CHL',
'state_subdivision_name'=>'Coquimbo',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CL-CO'
] );


			
State::create( [
'state_subdivision_id'=>12997,
'country_code_char2'=>'CL',
'country_code_char3'=>'CHL',
'state_subdivision_name'=>'Araucanía',
'state_subdivision_alternate_names'=>'La Araucanía',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CL-AR'
] );


			
State::create( [
'state_subdivision_id'=>12998,
'country_code_char2'=>'CL',
'country_code_char3'=>'CHL',
'state_subdivision_name'=>'Antofagasta',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CL-AN'
] );


			
State::create( [
'state_subdivision_id'=>12999,
'country_code_char2'=>'CL',
'country_code_char3'=>'CHL',
'state_subdivision_name'=>'Atacama',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CL-AT'
] );


			
State::create( [
'state_subdivision_id'=>13000,
'country_code_char2'=>'CL',
'country_code_char3'=>'CHL',
'state_subdivision_name'=>'Libertador General Bernardo Higgins',
'state_subdivision_alternate_names'=>'Higgins',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CL-LI',
] );


			
State::create( [
'state_subdivision_id'=>13001,
'country_code_char2'=>'CL',
'country_code_char3'=>'CHL',
'state_subdivision_name'=>'Magallanes',
'state_subdivision_alternate_names'=>'Magellantes y la Antártica Chilena',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CL-MA'
] );


			
State::create( [
'state_subdivision_id'=>13002,
'country_code_char2'=>'CL',
'country_code_char3'=>'CHL',
'state_subdivision_name'=>'Región Metropolitana de Santiago',
'state_subdivision_alternate_names'=>'Metropolitana de Santiago',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CL-RM'
] );


			
State::create( [
'state_subdivision_id'=>13003,
'country_code_char2'=>'CL',
'country_code_char3'=>'CHL',
'state_subdivision_name'=>'Valparaíso',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CL-VS'
] );


			
State::create( [
'state_subdivision_id'=>13004,
'country_code_char2'=>'CL',
'country_code_char3'=>'CHL',
'state_subdivision_name'=>'Aisén del General Carlos Ibáñez del Campo',
'state_subdivision_alternate_names'=>'Aisén del General Carlos Ibáñez del Campo, Aysén',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CL-AI'
] );


			
State::create( [
'state_subdivision_id'=>13005,
'country_code_char2'=>'CL',
'country_code_char3'=>'CHL',
'state_subdivision_name'=>'Bío-Bío',
'state_subdivision_alternate_names'=>'Bíobío',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CL-BI'
] );


			
State::create( [
'state_subdivision_id'=>13006,
'country_code_char2'=>'CL',
'country_code_char3'=>'CHL',
'state_subdivision_name'=>'Los Lagos',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CL-LL'
] );


			
State::create( [
'state_subdivision_id'=>13007,
'country_code_char2'=>'CN',
'country_code_char3'=>'CHN',
'state_subdivision_name'=>'Zhejiang',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CN-33'
] );


			
State::create( [
'state_subdivision_id'=>13008,
'country_code_char2'=>'CN',
'country_code_char3'=>'CHN',
'state_subdivision_name'=>'Xinjiang',
'state_subdivision_alternate_names'=>'Uighur, Uygur',
'primary_level_name'=>'autonomous region',
'state_subdivision_code'=>'CN-65'
] );


			
State::create( [
'state_subdivision_id'=>13009,
'country_code_char2'=>'CN',
'country_code_char3'=>'CHN',
'state_subdivision_name'=>'Tianjin',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'municipality',
'state_subdivision_code'=>'CN-12'
] );


			
State::create( [
'state_subdivision_id'=>13010,
'country_code_char2'=>'CN',
'country_code_char3'=>'CHN',
'state_subdivision_name'=>'Shanxi',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CN-14'
] );


			
State::create( [
'state_subdivision_id'=>13011,
'country_code_char2'=>'CN',
'country_code_char3'=>'CHN',
'state_subdivision_name'=>'Shandong',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CN-37'
] );


			
State::create( [
'state_subdivision_id'=>13012,
'country_code_char2'=>'CN',
'country_code_char3'=>'CHN',
'state_subdivision_name'=>'Anhui',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CN-34'
] );


			
State::create( [
'state_subdivision_id'=>13013,
'country_code_char2'=>'CN',
'country_code_char3'=>'CHN',
'state_subdivision_name'=>'Beijing',
'state_subdivision_alternate_names'=>'Beijing, Pekín',
'primary_level_name'=>'municipality',
'state_subdivision_code'=>'CN-11'
] );


			
State::create( [
'state_subdivision_id'=>13014,
'country_code_char2'=>'CN',
'country_code_char3'=>'CHN',
'state_subdivision_name'=>'Chongqing',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'municipality',
'state_subdivision_code'=>'CN-50'
] );


			
State::create( [
'state_subdivision_id'=>13015,
'country_code_char2'=>'CN',
'country_code_char3'=>'CHN',
'state_subdivision_name'=>'Gansu',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CN-62'
] );


			
State::create( [
'state_subdivision_id'=>13016,
'country_code_char2'=>'CN',
'country_code_char3'=>'CHN',
'state_subdivision_name'=>'Guangdong',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CN-44'
] );


			
State::create( [
'state_subdivision_id'=>13017,
'country_code_char2'=>'CN',
'country_code_char3'=>'CHN',
'state_subdivision_name'=>'Guizhou',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CN-52'
] );


			
State::create( [
'state_subdivision_id'=>13018,
'country_code_char2'=>'CN',
'country_code_char3'=>'CHN',
'state_subdivision_name'=>'Hainan',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CN-46'
] );


			
State::create( [
'state_subdivision_id'=>13019,
'country_code_char2'=>'CN',
'country_code_char3'=>'CHN',
'state_subdivision_name'=>'Hebei',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CN-13'
] );


			
State::create( [
'state_subdivision_id'=>13020,
'country_code_char2'=>'CN',
'country_code_char3'=>'CHN',
'state_subdivision_name'=>'Hubei',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CN-42'
] );


			
State::create( [
'state_subdivision_id'=>13021,
'country_code_char2'=>'CN',
'country_code_char3'=>'CHN',
'state_subdivision_name'=>'Jiangxi',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CN-36'
] );


			
State::create( [
'state_subdivision_id'=>13022,
'country_code_char2'=>'CN',
'country_code_char3'=>'CHN',
'state_subdivision_name'=>'Jilin',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CN-22'
] );


			
State::create( [
'state_subdivision_id'=>13023,
'country_code_char2'=>'CN',
'country_code_char3'=>'CHN',
'state_subdivision_name'=>'Liaoning',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CN-21'
] );


			
State::create( [
'state_subdivision_id'=>13024,
'country_code_char2'=>'CN',
'country_code_char3'=>'CHN',
'state_subdivision_name'=>'Nei Mongol (mn)',
'state_subdivision_alternate_names'=>'Inner Mongolia, Nei Monggol',
'primary_level_name'=>'autonomous region',
'state_subdivision_code'=>'CN-15'
] );


			
State::create( [
'state_subdivision_id'=>13025,
'country_code_char2'=>'CN',
'country_code_char3'=>'CHN',
'state_subdivision_name'=>'Ningxia',
'state_subdivision_alternate_names'=>'Ningxia Hui',
'primary_level_name'=>'autonomous region',
'state_subdivision_code'=>'CN-64'
] );


			
State::create( [
'state_subdivision_id'=>13026,
'country_code_char2'=>'CN',
'country_code_char3'=>'CHN',
'state_subdivision_name'=>'Qinghai',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CN-63'
] );


			
State::create( [
'state_subdivision_id'=>13027,
'country_code_char2'=>'CN',
'country_code_char3'=>'CHN',
'state_subdivision_name'=>'Shaanxi',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CN-61'
] );


			
State::create( [
'state_subdivision_id'=>13028,
'country_code_char2'=>'CN',
'country_code_char3'=>'CHN',
'state_subdivision_name'=>'Heilongjiang',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CN-23'
] );


			
State::create( [
'state_subdivision_id'=>13029,
'country_code_char2'=>'CN',
'country_code_char3'=>'CHN',
'state_subdivision_name'=>'Henan',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CN-41'
] );


			
State::create( [
'state_subdivision_id'=>13030,
'country_code_char2'=>'CN',
'country_code_char3'=>'CHN',
'state_subdivision_name'=>'Hunan',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CN-43'
] );


			
State::create( [
'state_subdivision_id'=>13031,
'country_code_char2'=>'CN',
'country_code_char3'=>'CHN',
'state_subdivision_name'=>'Jiangsu',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CN-32'
] );


			
State::create( [
'state_subdivision_id'=>13032,
'country_code_char2'=>'CN',
'country_code_char3'=>'CHN',
'state_subdivision_name'=>'Xizang',
'state_subdivision_alternate_names'=>'Tibet',
'primary_level_name'=>'autonomous region',
'state_subdivision_code'=>'CN-54'
] );


			
State::create( [
'state_subdivision_id'=>13033,
'country_code_char2'=>'CN',
'country_code_char3'=>'CHN',
'state_subdivision_name'=>'Yunnan',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CN-53'
] );


			
State::create( [
'state_subdivision_id'=>13034,
'country_code_char2'=>'CN',
'country_code_char3'=>'CHN',
'state_subdivision_name'=>'Aomen (zh) ***',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'special administrative region',
'state_subdivision_code'=>'CN-92'
] );


			
State::create( [
'state_subdivision_id'=>13035,
'country_code_char2'=>'CN',
'country_code_char3'=>'CHN',
'state_subdivision_name'=>'Fujian',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CN-35'
] );


			
State::create( [
'state_subdivision_id'=>13036,
'country_code_char2'=>'CN',
'country_code_char3'=>'CHN',
'state_subdivision_name'=>'Guangxi',
'state_subdivision_alternate_names'=>'Guangxi Zhuang',
'primary_level_name'=>'autonomous region',
'state_subdivision_code'=>'CN-45'
] );


			
State::create( [
'state_subdivision_id'=>13037,
'country_code_char2'=>'CN',
'country_code_char3'=>'CHN',
'state_subdivision_name'=>'Shanghai',
'state_subdivision_alternate_names'=>'Schanghai',
'primary_level_name'=>'municipality',
'state_subdivision_code'=>'CN-31'
] );


			
State::create( [
'state_subdivision_id'=>13038,
'country_code_char2'=>'CN',
'country_code_char3'=>'CHN',
'state_subdivision_name'=>'Sichuan',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CN-51'
] );


			
State::create( [
'state_subdivision_id'=>13039,
'country_code_char2'=>'CN',
'country_code_char3'=>'CHN',
'state_subdivision_name'=>'Xianggang (zh) **',
'state_subdivision_alternate_names'=>'Xianggang, Hongkong',
'primary_level_name'=>'special administrative region',
'state_subdivision_code'=>'CN-91'
] );


			
State::create( [
'state_subdivision_id'=>13040,
'country_code_char2'=>'CO',
'country_code_char3'=>'COL',
'state_subdivision_name'=>'Vaupés',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'CO-VAU'
] );


			
State::create( [
'state_subdivision_id'=>13041,
'country_code_char2'=>'CO',
'country_code_char3'=>'COL',
'state_subdivision_name'=>'Sucre',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'CO-SUC'
] );


			
State::create( [
'state_subdivision_id'=>13042,
'country_code_char2'=>'CO',
'country_code_char3'=>'COL',
'state_subdivision_name'=>'Quindío',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'CO-QUI'
] );


			
State::create( [
'state_subdivision_id'=>13043,
'country_code_char2'=>'CO',
'country_code_char3'=>'COL',
'state_subdivision_name'=>'San Andrés, Providencia y Santa Catalina',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'CO-SAP'
] );


			
State::create( [
'state_subdivision_id'=>13044,
'country_code_char2'=>'CO',
'country_code_char3'=>'COL',
'state_subdivision_name'=>'Nariño',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'CO-NAR'
] );


			
State::create( [
'state_subdivision_id'=>13045,
'country_code_char2'=>'CO',
'country_code_char3'=>'COL',
'state_subdivision_name'=>'Amazonas',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'CO-AMA'
] );


			
State::create( [
'state_subdivision_id'=>13046,
'country_code_char2'=>'CO',
'country_code_char3'=>'COL',
'state_subdivision_name'=>'Arauca',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'CO-ARA'
] );


			
State::create( [
'state_subdivision_id'=>13047,
'country_code_char2'=>'CO',
'country_code_char3'=>'COL',
'state_subdivision_name'=>'Atlántico',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'CO-ATL'
] );


			
State::create( [
'state_subdivision_id'=>13048,
'country_code_char2'=>'CO',
'country_code_char3'=>'COL',
'state_subdivision_name'=>'Bolívar',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'CO-BOL'
] );


			
State::create( [
'state_subdivision_id'=>13049,
'country_code_char2'=>'CO',
'country_code_char3'=>'COL',
'state_subdivision_name'=>'Caldas',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'CO-CAL'
] );


			
State::create( [
'state_subdivision_id'=>13050,
'country_code_char2'=>'CO',
'country_code_char3'=>'COL',
'state_subdivision_name'=>'Caquetá',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'CO-CAQ'
] );


			
State::create( [
'state_subdivision_id'=>13051,
'country_code_char2'=>'CO',
'country_code_char3'=>'COL',
'state_subdivision_name'=>'Cauca',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'CO-CAU'
] );


			
State::create( [
'state_subdivision_id'=>13052,
'country_code_char2'=>'CO',
'country_code_char3'=>'COL',
'state_subdivision_name'=>'Chocó',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'CO-CHO'
] );


			
State::create( [
'state_subdivision_id'=>13053,
'country_code_char2'=>'CO',
'country_code_char3'=>'COL',
'state_subdivision_name'=>'Córdoba',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'CO-COR'
] );


			
State::create( [
'state_subdivision_id'=>13054,
'country_code_char2'=>'CO',
'country_code_char3'=>'COL',
'state_subdivision_name'=>'Guainía',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'CO-GUA'
] );


			
State::create( [
'state_subdivision_id'=>13055,
'country_code_char2'=>'CO',
'country_code_char3'=>'COL',
'state_subdivision_name'=>'Antioquia',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'CO-ANT'
] );


			
State::create( [
'state_subdivision_id'=>13056,
'country_code_char2'=>'CO',
'country_code_char3'=>'COL',
'state_subdivision_name'=>'Distrito Capital de Bogotá',
'state_subdivision_alternate_names'=>'Santafé de Bogotá Distrito Capital',
'primary_level_name'=>'capital district',
'state_subdivision_code'=>'CO-DC'
] );


			
State::create( [
'state_subdivision_id'=>13057,
'country_code_char2'=>'CO',
'country_code_char3'=>'COL',
'state_subdivision_name'=>'Boyacá',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'CO-BOY'
] );


			
State::create( [
'state_subdivision_id'=>13058,
'country_code_char2'=>'CO',
'country_code_char3'=>'COL',
'state_subdivision_name'=>'Casanare',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'CO-CAS'
] );


			
State::create( [
'state_subdivision_id'=>13059,
'country_code_char2'=>'CO',
'country_code_char3'=>'COL',
'state_subdivision_name'=>'Cesar',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'CO-CES'
] );


			
State::create( [
'state_subdivision_id'=>13060,
'country_code_char2'=>'CO',
'country_code_char3'=>'COL',
'state_subdivision_name'=>'Cundinamarca',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'CO-CUN'
] );


			
State::create( [
'state_subdivision_id'=>13061,
'country_code_char2'=>'CO',
'country_code_char3'=>'COL',
'state_subdivision_name'=>'Guaviare',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'CO-GUV'
] );


			
State::create( [
'state_subdivision_id'=>13062,
'country_code_char2'=>'CO',
'country_code_char3'=>'COL',
'state_subdivision_name'=>'Magdalena',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'CO-MAG'
] );


			
State::create( [
'state_subdivision_id'=>13063,
'country_code_char2'=>'CO',
'country_code_char3'=>'COL',
'state_subdivision_name'=>'Huila',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'CO-HUI'
] );


			
State::create( [
'state_subdivision_id'=>13064,
'country_code_char2'=>'CO',
'country_code_char3'=>'COL',
'state_subdivision_name'=>'La Guajira',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'CO-LAG'
] );


			
State::create( [
'state_subdivision_id'=>13065,
'country_code_char2'=>'CO',
'country_code_char3'=>'COL',
'state_subdivision_name'=>'Meta',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'CO-MET'
] );


			
State::create( [
'state_subdivision_id'=>13066,
'country_code_char2'=>'CO',
'country_code_char3'=>'COL',
'state_subdivision_name'=>'Norte de Santander',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'CO-NSA'
] );


			
State::create( [
'state_subdivision_id'=>13067,
'country_code_char2'=>'CO',
'country_code_char3'=>'COL',
'state_subdivision_name'=>'Putumayo',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'CO-PUT'
] );


			
State::create( [
'state_subdivision_id'=>13068,
'country_code_char2'=>'CO',
'country_code_char3'=>'COL',
'state_subdivision_name'=>'Risaralda',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'CO-RIS'
] );


			
State::create( [
'state_subdivision_id'=>13069,
'country_code_char2'=>'CO',
'country_code_char3'=>'COL',
'state_subdivision_name'=>'Santander',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'CO-SAN'
] );


			
State::create( [
'state_subdivision_id'=>13070,
'country_code_char2'=>'CO',
'country_code_char3'=>'COL',
'state_subdivision_name'=>'Tolima',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'CO-TOL'
] );


			
State::create( [
'state_subdivision_id'=>13071,
'country_code_char2'=>'CO',
'country_code_char3'=>'COL',
'state_subdivision_name'=>'Valle del Cauca',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'CO-VAC'
] );


			
State::create( [
'state_subdivision_id'=>13072,
'country_code_char2'=>'CO',
'country_code_char3'=>'COL',
'state_subdivision_name'=>'Vichada',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'CO-VID'
] );


			
State::create( [
'state_subdivision_id'=>13073,
'country_code_char2'=>'KM',
'country_code_char3'=>'COM',
'state_subdivision_name'=>'Andjouân (Anjwān)',
'state_subdivision_alternate_names'=>'Anjouan, Ndzuwani, Nzwani',
'primary_level_name'=>'island',
'state_subdivision_code'=>'KM-A'
] );


			
State::create( [
'state_subdivision_id'=>13074,
'country_code_char2'=>'KM',
'country_code_char3'=>'COM',
'state_subdivision_name'=>'Andjazîdja',
'state_subdivision_alternate_names'=>'Grande Comore, Njazídja',
'primary_level_name'=>'island',
'state_subdivision_code'=>'KM-G'
] );


			
State::create( [
'state_subdivision_id'=>13075,
'country_code_char2'=>'KM',
'country_code_char3'=>'COM',
'state_subdivision_name'=>'Moûhîlî (Mūhīlī)',
'state_subdivision_alternate_names'=>'Mohilla, Mohéli, Moili',
'primary_level_name'=>'island',
'state_subdivision_code'=>'KM-M'
] );


			
State::create( [
'state_subdivision_id'=>13076,
'country_code_char2'=>'CG',
'country_code_char3'=>'COG',
'state_subdivision_name'=>'Cuvette-Ouest',
'state_subdivision_alternate_names'=>'Cuvette Ouest',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'CG-15'
] );


			
State::create( [
'state_subdivision_id'=>13077,
'country_code_char2'=>'CG',
'country_code_char3'=>'COG',
'state_subdivision_name'=>'Cuvette',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'CG-8'
] );


			
State::create( [
'state_subdivision_id'=>13078,
'country_code_char2'=>'CG',
'country_code_char3'=>'COG',
'state_subdivision_name'=>'Bouenza',
'state_subdivision_alternate_names'=>'Bouénza',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'CG-11'
] );


			
State::create( [
'state_subdivision_id'=>13079,
'country_code_char2'=>'CG',
'country_code_char3'=>'COG',
'state_subdivision_name'=>'Likouala',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'CG-7'
] );


			
State::create( [
'state_subdivision_id'=>13080,
'country_code_char2'=>'CG',
'country_code_char3'=>'COG',
'state_subdivision_name'=>'Brazzaville',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Commune',
'state_subdivision_code'=>'CG-BZV'
] );


			
State::create( [
'state_subdivision_id'=>13081,
'country_code_char2'=>'CG',
'country_code_char3'=>'COG',
'state_subdivision_name'=>'Kouilou',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'CG-5'
] );


			
State::create( [
'state_subdivision_id'=>13082,
'country_code_char2'=>'CG',
'country_code_char3'=>'COG',
'state_subdivision_name'=>'Lékoumou',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'CG-2'
] );


			
State::create( [
'state_subdivision_id'=>13083,
'country_code_char2'=>'CG',
'country_code_char3'=>'COG',
'state_subdivision_name'=>'Niari',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'CG-9'
] );


			
State::create( [
'state_subdivision_id'=>13084,
'country_code_char2'=>'CG',
'country_code_char3'=>'COG',
'state_subdivision_name'=>'Pool',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'CG-12'
] );


			
State::create( [
'state_subdivision_id'=>13085,
'country_code_char2'=>'CG',
'country_code_char3'=>'COG',
'state_subdivision_name'=>'Sangha',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'CG-13'
] );


			
State::create( [
'state_subdivision_id'=>13086,
'country_code_char2'=>'CG',
'country_code_char3'=>'COG',
'state_subdivision_name'=>'Plateaux',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'CG-14'
] );


			
State::create( [
'state_subdivision_id'=>13087,
'country_code_char2'=>'CD',
'country_code_char3'=>'COD',
'state_subdivision_name'=>'Nord-Kivu',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CD-NK'
] );


			
State::create( [
'state_subdivision_id'=>13088,
'country_code_char2'=>'CD',
'country_code_char3'=>'COD',
'state_subdivision_name'=>'Bas-Congo',
'state_subdivision_alternate_names'=>'Bas-Zaire',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CD-BC'
] );


			
State::create( [
'state_subdivision_id'=>13089,
'country_code_char2'=>'CD',
'country_code_char3'=>'COD',
'state_subdivision_name'=>'Orientale',
'state_subdivision_alternate_names'=>'Haut-Zaire, Orientale',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CD-OR'
] );


			
State::create( [
'state_subdivision_id'=>13090,
'country_code_char2'=>'CD',
'country_code_char3'=>'COD',
'state_subdivision_name'=>'Kasai-Oriental',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CD-KE'
] );


			
State::create( [
'state_subdivision_id'=>13091,
'country_code_char2'=>'CD',
'country_code_char3'=>'COD',
'state_subdivision_name'=>'Kinshasa',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'city',
'state_subdivision_code'=>'CD-KN'
] );


			
State::create( [
'state_subdivision_id'=>13092,
'country_code_char2'=>'CD',
'country_code_char3'=>'COD',
'state_subdivision_name'=>'Kasai-Occidental',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CD-KW'
] );


			
State::create( [
'state_subdivision_id'=>13093,
'country_code_char2'=>'CD',
'country_code_char3'=>'COD',
'state_subdivision_name'=>'Équateur',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CD-EQ'
] );


			
State::create( [
'state_subdivision_id'=>13094,
'country_code_char2'=>'CD',
'country_code_char3'=>'COD',
'state_subdivision_name'=>'Bandundu',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CD-BN'
] );


			
State::create( [
'state_subdivision_id'=>13095,
'country_code_char2'=>'CD',
'country_code_char3'=>'COD',
'state_subdivision_name'=>'Maniema',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CD-MA'
] );


			
State::create( [
'state_subdivision_id'=>13096,
'country_code_char2'=>'CD',
'country_code_char3'=>'COD',
'state_subdivision_name'=>'Sud-Kivu',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CD-SK'
] );


			
State::create( [
'state_subdivision_id'=>13097,
'country_code_char2'=>'CD',
'country_code_char3'=>'COD',
'state_subdivision_name'=>'Katanga',
'state_subdivision_alternate_names'=>'Shaba',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CD-KA'
] );


			
State::create( [
'state_subdivision_id'=>13113,
'country_code_char2'=>'CR',
'country_code_char3'=>'CRI',
'state_subdivision_name'=>'Puntarenas',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'CR-P'
] );


			
State::create( [
'state_subdivision_id'=>13114,
'country_code_char2'=>'CR',
'country_code_char3'=>'CRI',
'state_subdivision_name'=>'Limón',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'CR-L'
] );


			
State::create( [
'state_subdivision_id'=>13115,
'country_code_char2'=>'CR',
'country_code_char3'=>'CRI',
'state_subdivision_name'=>'Cartago',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'CR-C'
] );


			
State::create( [
'state_subdivision_id'=>13116,
'country_code_char2'=>'CR',
'country_code_char3'=>'CRI',
'state_subdivision_name'=>'Guanacaste',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'CR-G'
] );


			
State::create( [
'state_subdivision_id'=>13117,
'country_code_char2'=>'CR',
'country_code_char3'=>'CRI',
'state_subdivision_name'=>'San José',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'CR-SJ'
] );


			
State::create( [
'state_subdivision_id'=>13118,
'country_code_char2'=>'CR',
'country_code_char3'=>'CRI',
'state_subdivision_name'=>'Heredia',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'CR-H'
] );


			
State::create( [
'state_subdivision_id'=>13119,
'country_code_char2'=>'CR',
'country_code_char3'=>'CRI',
'state_subdivision_name'=>'Alajuela',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'CR-A'
] );


			
State::create( [
'state_subdivision_id'=>13120,
'country_code_char2'=>'HR',
'country_code_char3'=>'HRV',
'state_subdivision_name'=>'Vukovarsko-srijemska županija',
'state_subdivision_alternate_names'=>'Vukovar-Sirmium',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HR-16'
] );


			
State::create( [
'state_subdivision_id'=>13121,
'country_code_char2'=>'HR',
'country_code_char3'=>'HRV',
'state_subdivision_name'=>'Istarska županija',
'state_subdivision_alternate_names'=>'Istria',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HR-18'
] );


			
State::create( [
'state_subdivision_id'=>13122,
'country_code_char2'=>'HR',
'country_code_char3'=>'HRV',
'state_subdivision_name'=>'Dubrovacko-neretvanska županija',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HR-19'
] );


			
State::create( [
'state_subdivision_id'=>13123,
'country_code_char2'=>'HR',
'country_code_char3'=>'HRV',
'state_subdivision_name'=>'Grad Zagreb',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'city',
'state_subdivision_code'=>'HR-21'
] );


			
State::create( [
'state_subdivision_id'=>13124,
'country_code_char2'=>'HR',
'country_code_char3'=>'HRV',
'state_subdivision_name'=>'Karlovacka županija',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HR-04'
] );


			
State::create( [
'state_subdivision_id'=>13125,
'country_code_char2'=>'HR',
'country_code_char3'=>'HRV',
'state_subdivision_name'=>'Krapinsko-zagorska županija',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HR-02'
] );


			
State::create( [
'state_subdivision_id'=>13126,
'country_code_char2'=>'HR',
'country_code_char3'=>'HRV',
'state_subdivision_name'=>'Licko-senjska županija',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HR-09'
] );


			
State::create( [
'state_subdivision_id'=>13127,
'country_code_char2'=>'HR',
'country_code_char3'=>'HRV',
'state_subdivision_name'=>'Osjecko-baranjska županija',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HR-14'
] );


			
State::create( [
'state_subdivision_id'=>13128,
'country_code_char2'=>'HR',
'country_code_char3'=>'HRV',
'state_subdivision_name'=>'Primorsko-goranska županija',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HR-08'
] );


			
State::create( [
'state_subdivision_id'=>13129,
'country_code_char2'=>'HR',
'country_code_char3'=>'HRV',
'state_subdivision_name'=>'Šibensko-kninska županija',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HR-15'
] );


			
State::create( [
'state_subdivision_id'=>13130,
'country_code_char2'=>'HR',
'country_code_char3'=>'HRV',
'state_subdivision_name'=>'Brodsko-posavska županija',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HR-12'
] );


			
State::create( [
'state_subdivision_id'=>13131,
'country_code_char2'=>'HR',
'country_code_char3'=>'HRV',
'state_subdivision_name'=>'Varaždinska županija',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HR-05'
] );


			
State::create( [
'state_subdivision_id'=>13132,
'country_code_char2'=>'HR',
'country_code_char3'=>'HRV',
'state_subdivision_name'=>'Viroviticko-podravska županija',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HR-10'
] );


			
State::create( [
'state_subdivision_id'=>13133,
'country_code_char2'=>'HR',
'country_code_char3'=>'HRV',
'state_subdivision_name'=>'Zadarska županija',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HR-13'
] );


			
State::create( [
'state_subdivision_id'=>13134,
'country_code_char2'=>'HR',
'country_code_char3'=>'HRV',
'state_subdivision_name'=>'Zagrebacka županija',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HR-01'
] );


			
State::create( [
'state_subdivision_id'=>13135,
'country_code_char2'=>'HR',
'country_code_char3'=>'HRV',
'state_subdivision_name'=>'Bjelovarsko-bilogorska županija',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HR-07'
] );


			
State::create( [
'state_subdivision_id'=>13136,
'country_code_char2'=>'HR',
'country_code_char3'=>'HRV',
'state_subdivision_name'=>'Koprivnicko-križevacka županija',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HR-06'
] );


			
State::create( [
'state_subdivision_id'=>13137,
'country_code_char2'=>'HR',
'country_code_char3'=>'HRV',
'state_subdivision_name'=>'Splitsko-dalmatinska županija',
'state_subdivision_alternate_names'=>'Split-Dalmatia',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HR-17'
] );


			
State::create( [
'state_subdivision_id'=>13138,
'country_code_char2'=>'HR',
'country_code_char3'=>'HRV',
'state_subdivision_name'=>'Sisacko-moslavacka županija',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HR-03'
] );


			
State::create( [
'state_subdivision_id'=>13139,
'country_code_char2'=>'HR',
'country_code_char3'=>'HRV',
'state_subdivision_name'=>'Požeško-slavonska županija',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HR-11'
] );


			
State::create( [
'state_subdivision_id'=>13140,
'country_code_char2'=>'HR',
'country_code_char3'=>'HRV',
'state_subdivision_name'=>'Medimurska županija',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HR-20'
] );


			
State::create( [
'state_subdivision_id'=>13142,
'country_code_char2'=>'CU',
'country_code_char3'=>'CUB',
'state_subdivision_name'=>'Ciudad de La Habana',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CU-03'
] );


			
State::create( [
'state_subdivision_id'=>13143,
'country_code_char2'=>'CU',
'country_code_char3'=>'CUB',
'state_subdivision_name'=>'Isla de la Juventud',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'special municipality',
'state_subdivision_code'=>'CU-99'
] );


			
State::create( [
'state_subdivision_id'=>13144,
'country_code_char2'=>'CU',
'country_code_char3'=>'CUB',
'state_subdivision_name'=>'Las Tunas',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CU-10'
] );


			
State::create( [
'state_subdivision_id'=>13145,
'country_code_char2'=>'CU',
'country_code_char3'=>'CUB',
'state_subdivision_name'=>'Matanzas',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CU-04'
] );


			
State::create( [
'state_subdivision_id'=>13146,
'country_code_char2'=>'CU',
'country_code_char3'=>'CUB',
'state_subdivision_name'=>'Sancti Spíritus',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CU-07'
] );


			
State::create( [
'state_subdivision_id'=>13147,
'country_code_char2'=>'CU',
'country_code_char3'=>'CUB',
'state_subdivision_name'=>'Villa Clara',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CU-05'
] );


			
State::create( [
'state_subdivision_id'=>13152,
'country_code_char2'=>'CU',
'country_code_char3'=>'CUB',
'state_subdivision_name'=>'Camagüey',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CU-09'
] );


			
State::create( [
'state_subdivision_id'=>13153,
'country_code_char2'=>'CU',
'country_code_char3'=>'CUB',
'state_subdivision_name'=>'Ciego de Ávila',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CU-08'
] );


			
State::create( [
'state_subdivision_id'=>13154,
'country_code_char2'=>'CU',
'country_code_char3'=>'CUB',
'state_subdivision_name'=>'Cienfuegos',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CU-06'
] );


			
State::create( [
'state_subdivision_id'=>13155,
'country_code_char2'=>'CU',
'country_code_char3'=>'CUB',
'state_subdivision_name'=>'Granma',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CU-12'
] );


			
State::create( [
'state_subdivision_id'=>13156,
'country_code_char2'=>'CU',
'country_code_char3'=>'CUB',
'state_subdivision_name'=>'Holguín',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CU-11'
] );


			
State::create( [
'state_subdivision_id'=>13157,
'country_code_char2'=>'CU',
'country_code_char3'=>'CUB',
'state_subdivision_name'=>'Guantánamo',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CU-14'
] );


			
State::create( [
'state_subdivision_id'=>13158,
'country_code_char2'=>'CU',
'country_code_char3'=>'CUB',
'state_subdivision_name'=>'Santiago de Cuba',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CU-13'
] );


			
State::create( [
'state_subdivision_id'=>13159,
'country_code_char2'=>'CU',
'country_code_char3'=>'CUB',
'state_subdivision_name'=>'La Habana',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CU-02'
] );


			
State::create( [
'state_subdivision_id'=>13160,
'country_code_char2'=>'CU',
'country_code_char3'=>'CUB',
'state_subdivision_name'=>'Pinar del Río',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'CU-01'
] );


			
State::create( [
'state_subdivision_id'=>13183,
'country_code_char2'=>'CZ',
'country_code_char3'=>'CZE',
'state_subdivision_name'=>'Karlovarský kraj',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CZ-KA'
] );


			
State::create( [
'state_subdivision_id'=>13184,
'country_code_char2'=>'CZ',
'country_code_char3'=>'CZE',
'state_subdivision_name'=>'Liberecký kraj',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CZ-LI'
] );


			
State::create( [
'state_subdivision_id'=>13185,
'country_code_char2'=>'CZ',
'country_code_char3'=>'CZE',
'state_subdivision_name'=>'Olomoucký kraj',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CZ-OL'
] );


			
State::create( [
'state_subdivision_id'=>13186,
'country_code_char2'=>'CZ',
'country_code_char3'=>'CZE',
'state_subdivision_name'=>'Plzenský kraj',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CZ-PL'
] );


			
State::create( [
'state_subdivision_id'=>13187,
'country_code_char2'=>'CZ',
'country_code_char3'=>'CZE',
'state_subdivision_name'=>'Stredoceský kraj',
'state_subdivision_alternate_names'=>'Central Bohemia, Mittelböhmen, Stredocesky',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CZ-ST'
] );


			
State::create( [
'state_subdivision_id'=>13188,
'country_code_char2'=>'CZ',
'country_code_char3'=>'CZE',
'state_subdivision_name'=>'Vysocina',
'state_subdivision_alternate_names'=>'Jihlavský',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CZ-VY'
] );


			
State::create( [
'state_subdivision_id'=>13219,
'country_code_char2'=>'CZ',
'country_code_char3'=>'CZE',
'state_subdivision_name'=>'Jihoceský kraj',
'state_subdivision_alternate_names'=>'Budějovický, Českobudějovický',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CZ-JC'
] );


			
State::create( [
'state_subdivision_id'=>13220,
'country_code_char2'=>'CZ',
'country_code_char3'=>'CZE',
'state_subdivision_name'=>'Jihomoravský kraj ',
'state_subdivision_alternate_names'=>'Brnenský',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CZ-JM'
] );


			
State::create( [
'state_subdivision_id'=>13221,
'country_code_char2'=>'CZ',
'country_code_char3'=>'CZE',
'state_subdivision_name'=>'Královéhradecký kraj',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CZ-KR'
] );


			
State::create( [
'state_subdivision_id'=>13222,
'country_code_char2'=>'CZ',
'country_code_char3'=>'CZE',
'state_subdivision_name'=>'Moravskoslezský kraj',
'state_subdivision_alternate_names'=>'Ostravský',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CZ-MO'
] );


			
State::create( [
'state_subdivision_id'=>13223,
'country_code_char2'=>'CZ',
'country_code_char3'=>'CZE',
'state_subdivision_name'=>'Pardubický kraj',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CZ-PA'
] );


			
State::create( [
'state_subdivision_id'=>13224,
'country_code_char2'=>'CZ',
'country_code_char3'=>'CZE',
'state_subdivision_name'=>'Praha, hlavní mesto',
'state_subdivision_alternate_names'=>'Hlavi město Praha, Praha, Prag, Prague',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CZ-PR'
] );


			
State::create( [
'state_subdivision_id'=>13225,
'country_code_char2'=>'CZ',
'country_code_char3'=>'CZE',
'state_subdivision_name'=>'Ústecký kraj ',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CZ-US'
] );


			
State::create( [
'state_subdivision_id'=>13226,
'country_code_char2'=>'CZ',
'country_code_char3'=>'CZE',
'state_subdivision_name'=>'Zlínský kraj',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'CZ-ZL'
] );


			
State::create( [
'state_subdivision_id'=>13256,
'country_code_char2'=>'DK',
'country_code_char3'=>'DNK',
'state_subdivision_name'=>'Bornholm',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'DK-040'
] );


			
State::create( [
'state_subdivision_id'=>13257,
'country_code_char2'=>'DK',
'country_code_char3'=>'DNK',
'state_subdivision_name'=>'Frederiksborg',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'DK-020'
] );


			
State::create( [
'state_subdivision_id'=>13258,
'country_code_char2'=>'DK',
'country_code_char3'=>'DNK',
'state_subdivision_name'=>'København City',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'city',
'state_subdivision_code'=>'DK-101'
] );


			
State::create( [
'state_subdivision_id'=>13259,
'country_code_char2'=>'DK',
'country_code_char3'=>'DNK',
'state_subdivision_name'=>'Ringkøbing',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'DK-065'
] );


			
State::create( [
'state_subdivision_id'=>13260,
'country_code_char2'=>'DK',
'country_code_char3'=>'DNK',
'state_subdivision_name'=>'Sønderjylland',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'DK-050'
] );


			
State::create( [
'state_subdivision_id'=>13261,
'country_code_char2'=>'DK',
'country_code_char3'=>'DNK',
'state_subdivision_name'=>'Storstrøm',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'DK-035'
] );


			
State::create( [
'state_subdivision_id'=>13262,
'country_code_char2'=>'DK',
'country_code_char3'=>'DNK',
'state_subdivision_name'=>'Vejle',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'DK-060'
] );


			
State::create( [
'state_subdivision_id'=>13263,
'country_code_char2'=>'DK',
'country_code_char3'=>'DNK',
'state_subdivision_name'=>'Vestsjælland',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'DK-030'
] );


			
State::create( [
'state_subdivision_id'=>13264,
'country_code_char2'=>'DK',
'country_code_char3'=>'DNK',
'state_subdivision_name'=>'Viborg',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'DK-076'
] );


			
State::create( [
'state_subdivision_id'=>13265,
'country_code_char2'=>'DK',
'country_code_char3'=>'DNK',
'state_subdivision_name'=>'Fyn',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'DK-042'
] );


			
State::create( [
'state_subdivision_id'=>13266,
'country_code_char2'=>'DK',
'country_code_char3'=>'DNK',
'state_subdivision_name'=>'København',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'DK-015'
] );


			
State::create( [
'state_subdivision_id'=>13267,
'country_code_char2'=>'DK',
'country_code_char3'=>'DNK',
'state_subdivision_name'=>'Nordjylland',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'DK-080'
] );


			
State::create( [
'state_subdivision_id'=>13268,
'country_code_char2'=>'DK',
'country_code_char3'=>'DNK',
'state_subdivision_name'=>'Ribe',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'DK-055'
] );


			
State::create( [
'state_subdivision_id'=>13269,
'country_code_char2'=>'DK',
'country_code_char3'=>'DNK',
'state_subdivision_name'=>'Roskilde',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'DK-025'
] );


			
State::create( [
'state_subdivision_id'=>13274,
'country_code_char2'=>'DK',
'country_code_char3'=>'DNK',
'state_subdivision_name'=>'Århus',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'DK-070'
] );


			
State::create( [
'state_subdivision_id'=>13275,
'country_code_char2'=>'DK',
'country_code_char3'=>'DNK',
'state_subdivision_name'=>'Frederiksberg City',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'city',
'state_subdivision_code'=>'DK-147'
] );


			
State::create( [
'state_subdivision_id'=>13280,
'country_code_char2'=>'DJ',
'country_code_char3'=>'DJI',
'state_subdivision_name'=>'Djibouti',
'state_subdivision_alternate_names'=>'Djibouti',
'primary_level_name'=>'City',
'state_subdivision_code'=>'DJ-DJ'
] );


			
State::create( [
'state_subdivision_id'=>13281,
'country_code_char2'=>'DJ',
'country_code_char3'=>'DJI',
'state_subdivision_name'=>'Obock',
'state_subdivision_alternate_names'=>'Obock, Obok',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'DJ-OB'
] );


			
State::create( [
'state_subdivision_id'=>13282,
'country_code_char2'=>'DJ',
'country_code_char3'=>'DJI',
'state_subdivision_name'=>'Dikhil',
'state_subdivision_alternate_names'=>'Dikhil, Dikkil',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'DJ-DI'
] );


			
State::create( [
'state_subdivision_id'=>13283,
'country_code_char2'=>'DJ',
'country_code_char3'=>'DJI',
'state_subdivision_name'=>'Ali Sabieh',
'state_subdivision_alternate_names'=>'Ali Sabieh, Ali Sabih',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'DJ-AS'
] );


			
State::create( [
'state_subdivision_id'=>13284,
'country_code_char2'=>'DJ',
'country_code_char3'=>'DJI',
'state_subdivision_name'=>'Tadjourah',
'state_subdivision_alternate_names'=>'Tadjoura, Tadjourah, Tajura',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'DJ-TA'
] );


			
State::create( [
'state_subdivision_id'=>13285,
'country_code_char2'=>'DM',
'country_code_char3'=>'DMA',
'state_subdivision_name'=>'Saint Patrick',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'DM-09'
] );


			
State::create( [
'state_subdivision_id'=>13286,
'country_code_char2'=>'DM',
'country_code_char3'=>'DMA',
'state_subdivision_name'=>'Saint Andrew',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'DM-02'
] );


			
State::create( [
'state_subdivision_id'=>13287,
'country_code_char2'=>'DM',
'country_code_char3'=>'DMA',
'state_subdivision_name'=>'Saint Paul',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'DM-10'
] );


			
State::create( [
'state_subdivision_id'=>13288,
'country_code_char2'=>'DM',
'country_code_char3'=>'DMA',
'state_subdivision_name'=>'Saint Peter',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'DM-11'
] );


			
State::create( [
'state_subdivision_id'=>13289,
'country_code_char2'=>'DM',
'country_code_char3'=>'DMA',
'state_subdivision_name'=>'Saint David',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'DM-03'
] );


			
State::create( [
'state_subdivision_id'=>13290,
'country_code_char2'=>'DM',
'country_code_char3'=>'DMA',
'state_subdivision_name'=>'Saint Mark',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'DM-08'
] );


			
State::create( [
'state_subdivision_id'=>13291,
'country_code_char2'=>'DM',
'country_code_char3'=>'DMA',
'state_subdivision_name'=>'Saint Joseph',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'DM-06'
] );


			
State::create( [
'state_subdivision_id'=>13292,
'country_code_char2'=>'DM',
'country_code_char3'=>'DMA',
'state_subdivision_name'=>'Saint John',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'DM-05'
] );


			
State::create( [
'state_subdivision_id'=>13293,
'country_code_char2'=>'DM',
'country_code_char3'=>'DMA',
'state_subdivision_name'=>'Saint George',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'DM-04'
] );


			
State::create( [
'state_subdivision_id'=>13294,
'country_code_char2'=>'DM',
'country_code_char3'=>'DMA',
'state_subdivision_name'=>'Saint Luke',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'DM-07'
] );


			
State::create( [
'state_subdivision_id'=>13477,
'country_code_char2'=>'DO',
'country_code_char3'=>'DOM',
'state_subdivision_name'=>'Barahona',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'DO-04'
] );


			
State::create( [
'state_subdivision_id'=>13487,
'country_code_char2'=>'DO',
'country_code_char3'=>'DOM',
'state_subdivision_name'=>'La Romana',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'DO-12'
] );


			
State::create( [
'state_subdivision_id'=>13489,
'country_code_char2'=>'DO',
'country_code_char3'=>'DOM',
'state_subdivision_name'=>'Bahoruco',
'state_subdivision_alternate_names'=>'Bahoruco, Baoruco',
'primary_level_name'=>'province',
'state_subdivision_code'=>'DO-03'
] );


			
State::create( [
'state_subdivision_id'=>13490,
'country_code_char2'=>'DO',
'country_code_char3'=>'DOM',
'state_subdivision_name'=>'Dajabón',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'DO-05'
] );


			
State::create( [
'state_subdivision_id'=>13491,
'country_code_char2'=>'DO',
'country_code_char3'=>'DOM',
'state_subdivision_name'=>'Duarte',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'DO-06'
] );


			
State::create( [
'state_subdivision_id'=>13492,
'country_code_char2'=>'DO',
'country_code_char3'=>'DOM',
'state_subdivision_name'=>'El Seybo [El Seibo]',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'DO-08'
] );


			
State::create( [
'state_subdivision_id'=>13493,
'country_code_char2'=>'DO',
'country_code_char3'=>'DOM',
'state_subdivision_name'=>'Espaillat',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'DO-09'
] );


			
State::create( [
'state_subdivision_id'=>13494,
'country_code_char2'=>'DO',
'country_code_char3'=>'DOM',
'state_subdivision_name'=>'Independencia',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'DO-10'
] );


			
State::create( [
'state_subdivision_id'=>13496,
'country_code_char2'=>'DO',
'country_code_char3'=>'DOM',
'state_subdivision_name'=>'María Trinidad Sánchez',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'DO-14'
] );


			
State::create( [
'state_subdivision_id'=>13497,
'country_code_char2'=>'DO',
'country_code_char3'=>'DOM',
'state_subdivision_name'=>'Monte Cristi',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'DO-15'
] );


			
State::create( [
'state_subdivision_id'=>13498,
'country_code_char2'=>'DO',
'country_code_char3'=>'DOM',
'state_subdivision_name'=>'Pedernales',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'DO-16'
] );


			
State::create( [
'state_subdivision_id'=>13499,
'country_code_char2'=>'DO',
'country_code_char3'=>'DOM',
'state_subdivision_name'=>'Peravia',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'DO-17'
] );


			
State::create( [
'state_subdivision_id'=>13500,
'country_code_char2'=>'DO',
'country_code_char3'=>'DOM',
'state_subdivision_name'=>'Salcedo',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'DO-19'
] );


			
State::create( [
'state_subdivision_id'=>13501,
'country_code_char2'=>'DO',
'country_code_char3'=>'DOM',
'state_subdivision_name'=>'Sánchez Ramírez',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'DO-24'
] );


			
State::create( [
'state_subdivision_id'=>13502,
'country_code_char2'=>'DO',
'country_code_char3'=>'DOM',
'state_subdivision_name'=>'San Jose de Ocoa',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'DO-31'
] );


			
State::create( [
'state_subdivision_id'=>13503,
'country_code_char2'=>'DO',
'country_code_char3'=>'DOM',
'state_subdivision_name'=>'San Pedro de Macorís',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'DO-23'
] );


			
State::create( [
'state_subdivision_id'=>13504,
'country_code_char2'=>'DO',
'country_code_char3'=>'DOM',
'state_subdivision_name'=>'Santiago Rodríguez',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'DO-26'
] );


			
State::create( [
'state_subdivision_id'=>13505,
'country_code_char2'=>'DO',
'country_code_char3'=>'DOM',
'state_subdivision_name'=>'Valverde',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'DO-27'
] );


			
State::create( [
'state_subdivision_id'=>13506,
'country_code_char2'=>'DO',
'country_code_char3'=>'DOM',
'state_subdivision_name'=>'Azua',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'DO-02'
] );


			
State::create( [
'state_subdivision_id'=>13509,
'country_code_char2'=>'DO',
'country_code_char3'=>'DOM',
'state_subdivision_name'=>'La Estrelleta [Elías Piña]',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'DO-07'
] );


			
State::create( [
'state_subdivision_id'=>13510,
'country_code_char2'=>'DO',
'country_code_char3'=>'DOM',
'state_subdivision_name'=>'Hato Mayor',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'DO-30'
] );


			
State::create( [
'state_subdivision_id'=>13511,
'country_code_char2'=>'DO',
'country_code_char3'=>'DOM',
'state_subdivision_name'=>'La Altagracia',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'DO-11'
] );


			
State::create( [
'state_subdivision_id'=>13512,
'country_code_char2'=>'DO',
'country_code_char3'=>'DOM',
'state_subdivision_name'=>'La Vega',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'DO-13'
] );


			
State::create( [
'state_subdivision_id'=>13513,
'country_code_char2'=>'DO',
'country_code_char3'=>'DOM',
'state_subdivision_name'=>'Monseñor Nouel',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'DO-28'
] );


			
State::create( [
'state_subdivision_id'=>13514,
'country_code_char2'=>'DO',
'country_code_char3'=>'DOM',
'state_subdivision_name'=>'Monte Plata',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'DO-29'
] );


			
State::create( [
'state_subdivision_id'=>13515,
'country_code_char2'=>'DO',
'country_code_char3'=>'DOM',
'state_subdivision_name'=>'Puerto Plata',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'DO-18'
] );


			
State::create( [
'state_subdivision_id'=>13516,
'country_code_char2'=>'DO',
'country_code_char3'=>'DOM',
'state_subdivision_name'=>'Samaná',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'DO-20'
] );


			
State::create( [
'state_subdivision_id'=>13517,
'country_code_char2'=>'DO',
'country_code_char3'=>'DOM',
'state_subdivision_name'=>'San Cristóbal',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'DO-21'
] );


			
State::create( [
'state_subdivision_id'=>13518,
'country_code_char2'=>'DO',
'country_code_char3'=>'DOM',
'state_subdivision_name'=>'San Juan',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'DO-22'
] );


			
State::create( [
'state_subdivision_id'=>13519,
'country_code_char2'=>'DO',
'country_code_char3'=>'DOM',
'state_subdivision_name'=>'Santiago',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'DO-25'
] );


			
State::create( [
'state_subdivision_id'=>13520,
'country_code_char2'=>'DO',
'country_code_char3'=>'DOM',
'state_subdivision_name'=>'Distrito Nacional (Santo Domingo)',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'DO-01'
] );


			
State::create( [
'state_subdivision_id'=>13552,
'country_code_char2'=>'TL',
'country_code_char3'=>'TLS',
'state_subdivision_name'=>'Manufahi',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'TL-MF'
] );


			
State::create( [
'state_subdivision_id'=>13553,
'country_code_char2'=>'TL',
'country_code_char3'=>'TLS',
'state_subdivision_name'=>'Ainaro',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'TL-AN'
] );


			
State::create( [
'state_subdivision_id'=>13554,
'country_code_char2'=>'TL',
'country_code_char3'=>'TLS',
'state_subdivision_name'=>'Aileu',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'TL-AL'
] );

State::create( [
'state_subdivision_id'=>13555,
'country_code_char2'=>'TL',
'country_code_char3'=>'TLS',
'state_subdivision_name'=>'Oecussi',
'state_subdivision_alternate_names'=>'Ambeno, Ambino, Oecusse',
'primary_level_name'=>'District',
'state_subdivision_code'=>'TL-OE'
] );


			
State::create( [
'state_subdivision_id'=>13556,
'country_code_char2'=>'TL',
'country_code_char3'=>'TLS',
'state_subdivision_name'=>'Bobonaro',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'TL-BO'
] );


			
State::create( [
'state_subdivision_id'=>13557,
'country_code_char2'=>'TL',
'country_code_char3'=>'TLS',
'state_subdivision_name'=>'Cova Lima',
'state_subdivision_alternate_names'=>'Kova-Lima',
'primary_level_name'=>'District',
'state_subdivision_code'=>'TL-CO'
] );


			
State::create( [
'state_subdivision_id'=>13558,
'country_code_char2'=>'TL',
'country_code_char3'=>'TLS',
'state_subdivision_name'=>'Ermera',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'TL-ER'
] );


			
State::create( [
'state_subdivision_id'=>13559,
'country_code_char2'=>'TL',
'country_code_char3'=>'TLS',
'state_subdivision_name'=>'Liquiça',
'state_subdivision_alternate_names'=>'Likisia',
'primary_level_name'=>'District',
'state_subdivision_code'=>'TL-LI'
] );


			
State::create( [
'state_subdivision_id'=>13560,
'country_code_char2'=>'TL',
'country_code_char3'=>'TLS',
'state_subdivision_name'=>'Manatuto',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'TL-MT'
] );


			
State::create( [
'state_subdivision_id'=>13561,
'country_code_char2'=>'TL',
'country_code_char3'=>'TLS',
'state_subdivision_name'=>'Viqueque',
'state_subdivision_alternate_names'=>'Vikeke',
'primary_level_name'=>'District',
'state_subdivision_code'=>'TL-VI'
] );


			
State::create( [
'state_subdivision_id'=>13562,
'country_code_char2'=>'TL',
'country_code_char3'=>'TLS',
'state_subdivision_name'=>'Baucau',
'state_subdivision_alternate_names'=>'Baukau',
'primary_level_name'=>'District',
'state_subdivision_code'=>'TL-BA'
] );


			
State::create( [
'state_subdivision_id'=>13563,
'country_code_char2'=>'TL',
'country_code_char3'=>'TLS',
'state_subdivision_name'=>'Lautem',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'TL-LA'
] );


			
State::create( [
'state_subdivision_id'=>13564,
'country_code_char2'=>'TL',
'country_code_char3'=>'TLS',
'state_subdivision_name'=>'Dili',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'TL-DI'
] );


			
State::create( [
'state_subdivision_id'=>13566,
'country_code_char2'=>'EC',
'country_code_char3'=>'ECU',
'state_subdivision_name'=>'Zamora-Chinchipe',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'EC-Z'
] );


			
State::create( [
'state_subdivision_id'=>13567,
'country_code_char2'=>'EC',
'country_code_char3'=>'ECU',
'state_subdivision_name'=>'Sucumbíos',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'EC-U'
] );


			
State::create( [
'state_subdivision_id'=>13568,
'country_code_char2'=>'EC',
'country_code_char3'=>'ECU',
'state_subdivision_name'=>'Pastaza',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'EC-Y'
] );


			
State::create( [
'state_subdivision_id'=>13569,
'country_code_char2'=>'EC',
'country_code_char3'=>'ECU',
'state_subdivision_name'=>'Napo',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'EC-N'
] );


			
State::create( [
'state_subdivision_id'=>13570,
'country_code_char2'=>'EC',
'country_code_char3'=>'ECU',
'state_subdivision_name'=>'Azuay',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'EC-A'
] );


			
State::create( [
'state_subdivision_id'=>13571,
'country_code_char2'=>'EC',
'country_code_char3'=>'ECU',
'state_subdivision_name'=>'Bolívar',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'EC-B'
] );


			
State::create( [
'state_subdivision_id'=>13572,
'country_code_char2'=>'EC',
'country_code_char3'=>'ECU',
'state_subdivision_name'=>'Carchi',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'EC-C'
] );


			
State::create( [
'state_subdivision_id'=>13573,
'country_code_char2'=>'EC',
'country_code_char3'=>'ECU',
'state_subdivision_name'=>'Cotopaxi',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'EC-X'
] );


			
State::create( [
'state_subdivision_id'=>13574,
'country_code_char2'=>'EC',
'country_code_char3'=>'ECU',
'state_subdivision_name'=>'El Oro',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'EC-O'
] );


			
State::create( [
'state_subdivision_id'=>13575,
'country_code_char2'=>'EC',
'country_code_char3'=>'ECU',
'state_subdivision_name'=>'Galápagos',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'EC-W'
] );


			
State::create( [
'state_subdivision_id'=>13576,
'country_code_char2'=>'EC',
'country_code_char3'=>'ECU',
'state_subdivision_name'=>'Guayas',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'EC-G'
] );


			
State::create( [
'state_subdivision_id'=>13577,
'country_code_char2'=>'EC',
'country_code_char3'=>'ECU',
'state_subdivision_name'=>'Loja',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'EC-L'
] );


			
State::create( [
'state_subdivision_id'=>13578,
'country_code_char2'=>'EC',
'country_code_char3'=>'ECU',
'state_subdivision_name'=>'Cañar',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'EC-F'
] );


			
State::create( [
'state_subdivision_id'=>13579,
'country_code_char2'=>'EC',
'country_code_char3'=>'ECU',
'state_subdivision_name'=>'Chimborazo',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'EC-H'
] );


			
State::create( [
'state_subdivision_id'=>13580,
'country_code_char2'=>'EC',
'country_code_char3'=>'ECU',
'state_subdivision_name'=>'Esmeraldas',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'EC-E'
] );


			
State::create( [
'state_subdivision_id'=>13581,
'country_code_char2'=>'EC',
'country_code_char3'=>'ECU',
'state_subdivision_name'=>'Imbabura',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'EC-I'
] );


			
State::create( [
'state_subdivision_id'=>13582,
'country_code_char2'=>'EC',
'country_code_char3'=>'ECU',
'state_subdivision_name'=>'Los Ríos',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'EC-R'
] );


			
State::create( [
'state_subdivision_id'=>13583,
'country_code_char2'=>'EC',
'country_code_char3'=>'ECU',
'state_subdivision_name'=>'Manabí',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'EC-M'
] );


			
State::create( [
'state_subdivision_id'=>13584,
'country_code_char2'=>'EC',
'country_code_char3'=>'ECU',
'state_subdivision_name'=>'Morona-Santiago',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'EC-S'
] );


			
State::create( [
'state_subdivision_id'=>13585,
'country_code_char2'=>'EC',
'country_code_char3'=>'ECU',
'state_subdivision_name'=>'Orellana',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'EC-D'
] );


			
State::create( [
'state_subdivision_id'=>13586,
'country_code_char2'=>'EC',
'country_code_char3'=>'ECU',
'state_subdivision_name'=>'Pichincha',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'EC-P'
] );


			
State::create( [
'state_subdivision_id'=>13587,
'country_code_char2'=>'EC',
'country_code_char3'=>'ECU',
'state_subdivision_name'=>'Tungurahua',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'EC-T'
] );


			
State::create( [
'state_subdivision_id'=>13588,
'country_code_char2'=>'EG',
'country_code_char3'=>'EGY',
'state_subdivision_name'=>'Al Wadi al Jadid',
'state_subdivision_alternate_names'=>'El Wadi el Jadid, El Wadi el Jedid',
'primary_level_name'=>'Governorate',
'state_subdivision_code'=>'EG-WAD'
] );


			
State::create( [
'state_subdivision_id'=>13589,
'country_code_char2'=>'EG',
'country_code_char3'=>'EGY',
'state_subdivision_name'=>'al-Uqsur',
'state_subdivision_alternate_names'=>'al-Uqsur, al-Uqşur, Luxor, Louxor',
'primary_level_name'=>'Governorate',
'state_subdivision_code'=>'EG-LX'
] );


			
State::create( [
'state_subdivision_id'=>13590,
'country_code_char2'=>'EG',
'country_code_char3'=>'EGY',
'state_subdivision_name'=>'Shamal Sina',
'state_subdivision_alternate_names'=>'Shamal Sina, Sina aš-Šamālīyah, Sinai ash-Shamaliyah, Šamāl Sīna',
'primary_level_name'=>'Governorate',
'state_subdivision_code'=>'EG-SIN',
] );


			
State::create( [
'state_subdivision_id'=>13591,
'country_code_char2'=>'EG',
'country_code_char3'=>'EGY',
'state_subdivision_name'=>'Al Minya',
'state_subdivision_alternate_names'=>'El Minya, Minia, al-Minya, al-Minyā',
'primary_level_name'=>'Governorate',
'state_subdivision_code'=>'EG-MN'
] );


			
State::create( [
'state_subdivision_id'=>13592,
'country_code_char2'=>'EG',
'country_code_char3'=>'EGY',
'state_subdivision_name'=>'Kafr ash Shaykh',
'state_subdivision_alternate_names'=>'Kafr-ash-Shaykh, Kafr-aš-Šayẖ',
'primary_level_name'=>'Governorate',
'state_subdivision_code'=>'EG-KFS'
] );


			
State::create( [
'state_subdivision_id'=>13593,
'country_code_char2'=>'EG',
'country_code_char3'=>'EGY',
'state_subdivision_name'=>'Būr Sa`īd',
'state_subdivision_alternate_names'=>'Bur Said, Būr Saʿīd',
'primary_level_name'=>'Governorate',
'state_subdivision_code'=>'EG-PTS'
] );


			
State::create( [
'state_subdivision_id'=>13594,
'country_code_char2'=>'EG',
'country_code_char3'=>'EGY',
'state_subdivision_name'=>'Dumyat',
'state_subdivision_alternate_names'=>'Damiat, Dumyat, Dumyāţ, Damiette',
'primary_level_name'=>'Governorate',
'state_subdivision_code'=>'EG-DT'
] );


			
State::create( [
'state_subdivision_id'=>13595,
'country_code_char2'=>'EG',
'country_code_char3'=>'EGY',
'state_subdivision_name'=>'Al Iskandariyah',
'state_subdivision_alternate_names'=>'El Iskandariya, al-Iskandariyah, al-Iskandarīyah, Alexandria, Alexandrie, Alexandria',
'primary_level_name'=>'Governorate',
'state_subdivision_code'=>'EG-ALX'
] );


			
State::create( [
'state_subdivision_id'=>13596,
'country_code_char2'=>'EG',
'country_code_char3'=>'EGY',
'state_subdivision_name'=>'Al Jizah',
'state_subdivision_alternate_names'=>'El Giza, Gise, Giza, Gizah, Jiza, Jizah, al-Jīzah, Giseh, Gîza',
'primary_level_name'=>'Governorate',
'state_subdivision_code'=>'EG-GZ'
] );


			
State::create( [
'state_subdivision_id'=>13597,
'country_code_char2'=>'EG',
'country_code_char3'=>'EGY',
'state_subdivision_name'=>'Matrūh',
'state_subdivision_alternate_names'=>'Matrah, Matrūh',
'primary_level_name'=>'Governorate',
'state_subdivision_code'=>'EG-MT'
] );


			
State::create( [
'state_subdivision_id'=>13598,
'country_code_char2'=>'EG',
'country_code_char3'=>'EGY',
'state_subdivision_name'=>'Al Qahirah',
'state_subdivision_alternate_names'=>'El Qahira, Le Caire-sur-Mer, al-Qāhirah, Kairo, Caire, Cairo',
'primary_level_name'=>'Governorate',
'state_subdivision_code'=>'EG-C'
] );


			
State::create( [
'state_subdivision_id'=>13599,
'country_code_char2'=>'EG',
'country_code_char3'=>'EGY',
'state_subdivision_name'=>'Qina',
'state_subdivision_alternate_names'=>'Qina, Qinā',
'primary_level_name'=>'Governorate',
'state_subdivision_code'=>'EG-KN'
] );


			
State::create( [
'state_subdivision_id'=>13600,
'country_code_char2'=>'EG',
'country_code_char3'=>'EGY',
'state_subdivision_name'=>'Ash Sharqiyah',
'state_subdivision_alternate_names'=>'ash-Sharqiyah, aš-Šarqīyah',
'primary_level_name'=>'Governorate',
'state_subdivision_code'=>'EG-SHR'
] );


			
State::create( [
'state_subdivision_id'=>13601,
'country_code_char2'=>'EG',
'country_code_char3'=>'EGY',
'state_subdivision_name'=>'As Suways',
'state_subdivision_alternate_names'=>'El Suweiz, as-Suways',
'primary_level_name'=>'Governorate',
'state_subdivision_code'=>'EG-SUZ'
] );


			
State::create( [
'state_subdivision_id'=>13602,
'country_code_char2'=>'EG',
'country_code_char3'=>'EGY',
'state_subdivision_name'=>'Aswan',
'state_subdivision_alternate_names'=>'Aswān, Assuan, Assouan',
'primary_level_name'=>'Governorate',
'state_subdivision_code'=>'EG-ASN'
] );


			
State::create( [
'state_subdivision_id'=>13603,
'country_code_char2'=>'EG',
'country_code_char3'=>'EGY',
'state_subdivision_name'=>'Bani Suwayf',
'state_subdivision_alternate_names'=>'Bani Suwayf, Banī Suwayf',
'primary_level_name'=>'Governorate',
'state_subdivision_code'=>'EG-BNS'
] );


			
State::create( [
'state_subdivision_id'=>13604,
'country_code_char2'=>'EG',
'country_code_char3'=>'EGY',
'state_subdivision_name'=>'Asyut',
'state_subdivision_alternate_names'=>'Asiut, Assyût, Siut, Asyūţ, Assiut, Assiout',
'primary_level_name'=>'Governorate',
'state_subdivision_code'=>'EG-AST'
] );


			
State::create( [
'state_subdivision_id'=>13605,
'country_code_char2'=>'EG',
'country_code_char3'=>'EGY',
'state_subdivision_name'=>'Al Bahr al Ahmar',
'state_subdivision_alternate_names'=>'El Bahr el Ahmar',
'primary_level_name'=>'Governorate',
'state_subdivision_code'=>'EG-BA'
] );


			
State::create( [
'state_subdivision_id'=>13606,
'country_code_char2'=>'EG',
'country_code_char3'=>'EGY',
'state_subdivision_name'=>'Al Buhayrah',
'state_subdivision_alternate_names'=>'El Buhayra, al-Buh̨ayrah',
'primary_level_name'=>'Governorate',
'state_subdivision_code'=>'EG-BH'
] );


			
State::create( [
'state_subdivision_id'=>13607,
'country_code_char2'=>'EG',
'country_code_char3'=>'EGY',
'state_subdivision_name'=>'Ad Daqahliyah',
'state_subdivision_alternate_names'=>'Dakahlia, El Daqahliya, ad-Daqahliyah',
'primary_level_name'=>'Governorate',
'state_subdivision_code'=>'EG-DK'
] );


			
State::create( [
'state_subdivision_id'=>13608,
'country_code_char2'=>'EG',
'country_code_char3'=>'EGY',
'state_subdivision_name'=>'Al Fayyum',
'state_subdivision_alternate_names'=>'El Faiyūm, al-Fayyum, al-Fayyūm',
'primary_level_name'=>'Governorate',
'state_subdivision_code'=>'EG-FYM'
] );


			
State::create( [
'state_subdivision_id'=>13609,
'country_code_char2'=>'EG',
'country_code_char3'=>'EGY',
'state_subdivision_name'=>'Al Gharbiyah',
'state_subdivision_alternate_names'=>'El Gharbiya, Gharbiya, al-Garbiyah, al-Ġarbīyah',
'primary_level_name'=>'Governorate',
'state_subdivision_code'=>'EG-GH'
] );


			
State::create( [
'state_subdivision_id'=>13610,
'country_code_char2'=>'EG',
'country_code_char3'=>'EGY',
'state_subdivision_name'=>'Al Ismā`īlīyah',
'state_subdivision_alternate_names'=>'El Ismailia, Ismaʿiliya, al-Ismailiyah, al-Ismāīlīyah',
'primary_level_name'=>'Governorate',
'state_subdivision_code'=>'EG-IS'
] );


			
State::create( [
'state_subdivision_id'=>13611,
'country_code_char2'=>'EG',
'country_code_char3'=>'EGY',
'state_subdivision_name'=>'Janub Sina',
'state_subdivision_alternate_names'=>'Sina al-Janūbīyah, Sinai al-Janubiyah, South Sinai',
'primary_level_name'=>'Governorate',
'state_subdivision_code'=>'EG-JS',
] );


			
State::create( [
'state_subdivision_id'=>13612,
'country_code_char2'=>'EG',
'country_code_char3'=>'EGY',
'state_subdivision_name'=>'Al Minufiyah',
'state_subdivision_alternate_names'=>'El Minufiya, Menufiya, al-Minufiyah, al-Minūfīyah',
'primary_level_name'=>'Governorate',
'state_subdivision_code'=>'EG-MNF'
] );


			
State::create( [
'state_subdivision_id'=>13613,
'country_code_char2'=>'EG',
'country_code_char3'=>'EGY',
'state_subdivision_name'=>'Al Qalyubiyah',
'state_subdivision_alternate_names'=>'El Qalubiya, al-Qalyubiyah',
'primary_level_name'=>'Governorate',
'state_subdivision_code'=>'EG-KB'
] );


			
State::create( [
'state_subdivision_id'=>13614,
'country_code_char2'=>'EG',
'country_code_char3'=>'EGY',
'state_subdivision_name'=>'Suhaj',
'state_subdivision_alternate_names'=>'Sawhaj, Suhag, Suhaj, Sūhaj, Sawhāj',
'primary_level_name'=>'Governorate',
'state_subdivision_code'=>'EG-SHG'
] );


			
State::create( [
'state_subdivision_id'=>13615,
'country_code_char2'=>'SV',
'country_code_char3'=>'SLV',
'state_subdivision_name'=>'Usulután',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'SV-US'
] );


			
State::create( [
'state_subdivision_id'=>13616,
'country_code_char2'=>'SV',
'country_code_char3'=>'SLV',
'state_subdivision_name'=>'San Vicente',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'SV-SV'
] );


			
State::create( [
'state_subdivision_id'=>13617,
'country_code_char2'=>'SV',
'country_code_char3'=>'SLV',
'state_subdivision_name'=>'Morazán',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'SV-MO'
] );


			
State::create( [
'state_subdivision_id'=>13618,
'country_code_char2'=>'SV',
'country_code_char3'=>'SLV',
'state_subdivision_name'=>'Chalatenango',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'SV-CH'
] );


			
State::create( [
'state_subdivision_id'=>13619,
'country_code_char2'=>'SV',
'country_code_char3'=>'SLV',
'state_subdivision_name'=>'Ahuachapán',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'SV-AH'
] );


			
State::create( [
'state_subdivision_id'=>13620,
'country_code_char2'=>'SV',
'country_code_char3'=>'SLV',
'state_subdivision_name'=>'Cabañas',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'SV-CA'
] );


			
State::create( [
'state_subdivision_id'=>13621,
'country_code_char2'=>'SV',
'country_code_char3'=>'SLV',
'state_subdivision_name'=>'Cuscatlán',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'SV-CU'
] );


			
State::create( [
'state_subdivision_id'=>13622,
'country_code_char2'=>'SV',
'country_code_char3'=>'SLV',
'state_subdivision_name'=>'La Paz',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'SV-PA'
] );


			
State::create( [
'state_subdivision_id'=>13623,
'country_code_char2'=>'SV',
'country_code_char3'=>'SLV',
'state_subdivision_name'=>'La Unión',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'SV-UN'
] );


			
State::create( [
'state_subdivision_id'=>13624,
'country_code_char2'=>'SV',
'country_code_char3'=>'SLV',
'state_subdivision_name'=>'San Miguel',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'SV-SM'
] );


			
State::create( [
'state_subdivision_id'=>13625,
'country_code_char2'=>'SV',
'country_code_char3'=>'SLV',
'state_subdivision_name'=>'Santa Ana',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'SV-SA'
] );


			
State::create( [
'state_subdivision_id'=>13626,
'country_code_char2'=>'SV',
'country_code_char3'=>'SLV',
'state_subdivision_name'=>'Sonsonate',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'SV-SO'
] );


			
State::create( [
'state_subdivision_id'=>13627,
'country_code_char2'=>'SV',
'country_code_char3'=>'SLV',
'state_subdivision_name'=>'La Libertad',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'SV-LI'
] );


			
State::create( [
'state_subdivision_id'=>13628,
'country_code_char2'=>'SV',
'country_code_char3'=>'SLV',
'state_subdivision_name'=>'San Salvador',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'SV-SS'
] );


			
State::create( [
'state_subdivision_id'=>13629,
'country_code_char2'=>'GQ',
'country_code_char3'=>'GNQ',
'state_subdivision_name'=>'Wele-Nzás',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'GQ-WN'
] );


			
State::create( [
'state_subdivision_id'=>13630,
'country_code_char2'=>'GQ',
'country_code_char3'=>'GNQ',
'state_subdivision_name'=>'Kie-Ntem',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'GQ-KN'
] );


			
State::create( [
'state_subdivision_id'=>13631,
'country_code_char2'=>'GQ',
'country_code_char3'=>'GNQ',
'state_subdivision_name'=>'Litoral',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'GQ-LI'
] );


			
State::create( [
'state_subdivision_id'=>13632,
'country_code_char2'=>'GQ',
'country_code_char3'=>'GNQ',
'state_subdivision_name'=>'Bioko Norte',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'GQ-BN'
] );


			
State::create( [
'state_subdivision_id'=>13633,
'country_code_char2'=>'GQ',
'country_code_char3'=>'GNQ',
'state_subdivision_name'=>'Centro Sur',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'GQ-CS'
] );


			
State::create( [
'state_subdivision_id'=>13634,
'country_code_char2'=>'GQ',
'country_code_char3'=>'GNQ',
'state_subdivision_name'=>'Bioko Sur',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'GQ-BS'
] );


			
State::create( [
'state_subdivision_id'=>13635,
'country_code_char2'=>'GQ',
'country_code_char3'=>'GNQ',
'state_subdivision_name'=>'Annobón',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'GQ-AN'
] );


			
State::create( [
'state_subdivision_id'=>13636,
'country_code_char2'=>'ER',
'country_code_char3'=>'ERI',
'state_subdivision_name'=>'Semenawi Keyih Bahri [Semien-Keih-Bahri]',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'ER-SK'
] );


			
State::create( [
'state_subdivision_id'=>13637,
'country_code_char2'=>'ER',
'country_code_char3'=>'ERI',
'state_subdivision_name'=>'Gash-Barka',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'ER-GB'
] );


			
State::create( [
'state_subdivision_id'=>13638,
'country_code_char2'=>'ER',
'country_code_char3'=>'ERI',
'state_subdivision_name'=>'Anseba',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'ER-AN'
] );


			
State::create( [
'state_subdivision_id'=>13639,
'country_code_char2'=>'ER',
'country_code_char3'=>'ERI',
'state_subdivision_name'=>'Debubawi Keyih Bahri [Debub-Keih-Bahri]',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'ER-DK'
] );


			
State::create( [
'state_subdivision_id'=>13640,
'country_code_char2'=>'ER',
'country_code_char3'=>'ERI',
'state_subdivision_name'=>'Maakel [Maekel]',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'ER-MA'
] );


			
State::create( [
'state_subdivision_id'=>13641,
'country_code_char2'=>'ER',
'country_code_char3'=>'ERI',
'state_subdivision_name'=>'Debub',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'ER-DU'
] );


			
State::create( [
'state_subdivision_id'=>13642,
'country_code_char2'=>'EE',
'country_code_char3'=>'EST',
'state_subdivision_name'=>'Võrumaa',
'state_subdivision_alternate_names'=>'Vorumaa',
'primary_level_name'=>'County',
'state_subdivision_code'=>'EE-86'
] );


			
State::create( [
'state_subdivision_id'=>13643,
'country_code_char2'=>'EE',
'country_code_char3'=>'EST',
'state_subdivision_name'=>'Raplamaa',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'County',
'state_subdivision_code'=>'EE-70'
] );


			
State::create( [
'state_subdivision_id'=>13644,
'country_code_char2'=>'EE',
'country_code_char3'=>'EST',
'state_subdivision_name'=>'Viljandimaa',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'County',
'state_subdivision_code'=>'EE-84'
] );


			
State::create( [
'state_subdivision_id'=>13645,
'country_code_char2'=>'EE',
'country_code_char3'=>'EST',
'state_subdivision_name'=>'Saaremaa',
'state_subdivision_alternate_names'=>'Saare, Ösel',
'primary_level_name'=>'County',
'state_subdivision_code'=>'EE-74'
] );


			
State::create( [
'state_subdivision_id'=>13646,
'country_code_char2'=>'EE',
'country_code_char3'=>'EST',
'state_subdivision_name'=>'Ida-Virumaa',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'County',
'state_subdivision_code'=>'EE-44'
] );


			
State::create( [
'state_subdivision_id'=>13647,
'country_code_char2'=>'EE',
'country_code_char3'=>'EST',
'state_subdivision_name'=>'Jõgevamaa',
'state_subdivision_alternate_names'=>'Jogevamaa',
'primary_level_name'=>'County',
'state_subdivision_code'=>'EE-49'
] );


			
State::create( [
'state_subdivision_id'=>13648,
'country_code_char2'=>'EE',
'country_code_char3'=>'EST',
'state_subdivision_name'=>'Läänemaa',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'County',
'state_subdivision_code'=>'EE-57'
] );


			
State::create( [
'state_subdivision_id'=>13649,
'country_code_char2'=>'EE',
'country_code_char3'=>'EST',
'state_subdivision_name'=>'Pärnumaa',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'County',
'state_subdivision_code'=>'EE-67'
] );


			
State::create( [
'state_subdivision_id'=>13650,
'country_code_char2'=>'EE',
'country_code_char3'=>'EST',
'state_subdivision_name'=>'Põlvamaa',
'state_subdivision_alternate_names'=>'Polvamaa',
'primary_level_name'=>'County',
'state_subdivision_code'=>'EE-65'
] );


			
State::create( [
'state_subdivision_id'=>13651,
'country_code_char2'=>'EE',
'country_code_char3'=>'EST',
'state_subdivision_name'=>'Valgamaa',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'County',
'state_subdivision_code'=>'EE-82'
] );


			
State::create( [
'state_subdivision_id'=>13652,
'country_code_char2'=>'EE',
'country_code_char3'=>'EST',
'state_subdivision_name'=>'Järvamaa',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'County',
'state_subdivision_code'=>'EE-51'
] );


			
State::create( [
'state_subdivision_id'=>13653,
'country_code_char2'=>'EE',
'country_code_char3'=>'EST',
'state_subdivision_name'=>'Harjumaa',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'County',
'state_subdivision_code'=>'EE-37'
] );


			
State::create( [
'state_subdivision_id'=>13654,
'country_code_char2'=>'EE',
'country_code_char3'=>'EST',
'state_subdivision_name'=>'Hiiumaa',
'state_subdivision_alternate_names'=>'Dagden, Dagö',
'primary_level_name'=>'County',
'state_subdivision_code'=>'EE-39'
] );


			
State::create( [
'state_subdivision_id'=>13655,
'country_code_char2'=>'EE',
'country_code_char3'=>'EST',
'state_subdivision_name'=>'Lääne-Virumaa',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'County',
'state_subdivision_code'=>'EE-59'
] );


			
State::create( [
'state_subdivision_id'=>13656,
'country_code_char2'=>'EE',
'country_code_char3'=>'EST',
'state_subdivision_name'=>'Tartumaa',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'County',
'state_subdivision_code'=>'EE-78'
] );


			
State::create( [
'state_subdivision_id'=>13657,
'country_code_char2'=>'ET',
'country_code_char3'=>'ETH',
'state_subdivision_name'=>'YeDebub Biheroch Bihereseboch na Hizboch',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'ET-SN'
] );


			
State::create( [
'state_subdivision_id'=>13658,
'country_code_char2'=>'ET',
'country_code_char3'=>'ETH',
'state_subdivision_name'=>'Amara',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'ET-AM'
] );


			
State::create( [
'state_subdivision_id'=>13659,
'country_code_char2'=>'ET',
'country_code_char3'=>'ETH',
'state_subdivision_name'=>'Tigray',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'ET-TI'
] );


			
State::create( [
'state_subdivision_id'=>13661,
'country_code_char2'=>'ET',
'country_code_char3'=>'ETH',
'state_subdivision_name'=>'Adis Abeba',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'administration',
'state_subdivision_code'=>'ET-AA'
] );


			
State::create( [
'state_subdivision_id'=>13662,
'country_code_char2'=>'ET',
'country_code_char3'=>'ETH',
'state_subdivision_name'=>'Afar',
'state_subdivision_alternate_names'=>'Affar',
'primary_level_name'=>'state',
'state_subdivision_code'=>'ET-AF'
] );


			
State::create( [
'state_subdivision_id'=>13663,
'country_code_char2'=>'ET',
'country_code_char3'=>'ETH',
'state_subdivision_name'=>'Binshangul Gumuz',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'ET-BE'
] );


			
State::create( [
'state_subdivision_id'=>13664,
'country_code_char2'=>'ET',
'country_code_char3'=>'ETH',
'state_subdivision_name'=>'Sumale',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'ET-SO'
] );


			
State::create( [
'state_subdivision_id'=>13665,
'country_code_char2'=>'ET',
'country_code_char3'=>'ETH',
'state_subdivision_name'=>'Hareri Hizb',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'ET-HA'
] );


			
State::create( [
'state_subdivision_id'=>13666,
'country_code_char2'=>'ET',
'country_code_char3'=>'ETH',
'state_subdivision_name'=>'Gambela Hizboch',
'state_subdivision_alternate_names'=>'Gambela',
'primary_level_name'=>'state',
'state_subdivision_code'=>'ET-GA'
] );


			
State::create( [
'state_subdivision_id'=>13667,
'country_code_char2'=>'ET',
'country_code_char3'=>'ETH',
'state_subdivision_name'=>'Dire Dawa',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'administration',
'state_subdivision_code'=>'ET-DD'
] );


			
State::create( [
'state_subdivision_id'=>13668,
'country_code_char2'=>'ET',
'country_code_char3'=>'ETH',
'state_subdivision_name'=>'Oromiya',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'ET-OR'
] );


			
State::create( [
'state_subdivision_id'=>13681,
'country_code_char2'=>'FJ',
'country_code_char3'=>'FJI',
'state_subdivision_name'=>'Western',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'division',
'state_subdivision_code'=>'FJ-W'
] );


			
State::create( [
'state_subdivision_id'=>13682,
'country_code_char2'=>'FJ',
'country_code_char3'=>'FJI',
'state_subdivision_name'=>'Eastern',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'division',
'state_subdivision_code'=>'FJ-E'
] );


			
State::create( [
'state_subdivision_id'=>13683,
'country_code_char2'=>'FJ',
'country_code_char3'=>'FJI',
'state_subdivision_name'=>'Central',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'division',
'state_subdivision_code'=>'FJ-C'
] );


			
State::create( [
'state_subdivision_id'=>13684,
'country_code_char2'=>'FJ',
'country_code_char3'=>'FJI',
'state_subdivision_name'=>'Northern',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'division',
'state_subdivision_code'=>'FJ-N'
] );


			
State::create( [
'state_subdivision_id'=>13690,
'country_code_char2'=>'FI',
'country_code_char3'=>'FIN',
'state_subdivision_name'=>'Lapin lääni',
'state_subdivision_alternate_names'=>'Lappland, Lappi, Lappland, Laponie',
'primary_level_name'=>'',
'state_subdivision_code'=>'FI-LL'
] );


			
State::create( [
'state_subdivision_id'=>13703,
'country_code_char2'=>'FI',
'country_code_char3'=>'FIN',
'state_subdivision_name'=>'Ahvenanmaan lääni',
'state_subdivision_alternate_names'=>'Åland',
'primary_level_name'=>'',
'state_subdivision_code'=>'FI-AL'
] );


			
State::create( [
'state_subdivision_id'=>13706,
'country_code_char2'=>'FI',
'country_code_char3'=>'FIN',
'state_subdivision_name'=>'Itä-Suomen lääni',
'state_subdivision_alternate_names'=>'Östra Nyland, Itä-Uusimaa, Uusima de lʿEst',
'primary_level_name'=>'',
'state_subdivision_code'=>'FI-IS'
] );


			
State::create( [
'state_subdivision_id'=>13707,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Yvelines',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-78'
] );


			
State::create( [
'state_subdivision_id'=>13708,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Vosges',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-88'
] );


			
State::create( [
'state_subdivision_id'=>13709,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Val-d Oise',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-95',
] );


			
State::create( [
'state_subdivision_id'=>13710,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Seine-Maritime',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-76'
] );


			
State::create( [
'state_subdivision_id'=>13711,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Somme',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-80'
] );


			
State::create( [
'state_subdivision_id'=>13712,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Tarn-et-Garonne',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-82'
] );


			
State::create( [
'state_subdivision_id'=>13713,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Vaucluse',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-84'
] );


			
State::create( [
'state_subdivision_id'=>13714,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Savoie',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-73'
] );


			
State::create( [
'state_subdivision_id'=>13717,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Allier',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-03'
] );


			
State::create( [
'state_subdivision_id'=>13718,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Alpes-Maritimes',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-06'
] );


			
State::create( [
'state_subdivision_id'=>13719,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Ardennes',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-08'
] );


			
State::create( [
'state_subdivision_id'=>13720,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Aude',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-11'
] );


			
State::create( [
'state_subdivision_id'=>13721,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Bas-Rhin',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-67'
] );


			
State::create( [
'state_subdivision_id'=>13722,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Calvados',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-14'
] );


			
State::create( [
'state_subdivision_id'=>13723,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Charente',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-16'
] );


			
State::create( [
'state_subdivision_id'=>13736,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Ain',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-01'
] );


			
State::create( [
'state_subdivision_id'=>13737,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Aisne',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-02'
] );


			
State::create( [
'state_subdivision_id'=>13738,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Alpes-de-Haute-Provence',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-04'
] );


			
State::create( [
'state_subdivision_id'=>13739,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Ardèche',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-07'
] );


			
State::create( [
'state_subdivision_id'=>13740,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Ariège',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-09'
] );


			
State::create( [
'state_subdivision_id'=>13741,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Aube',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-10'
] );


			
State::create( [
'state_subdivision_id'=>13742,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Aveyron',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-12'
] );


			
State::create( [
'state_subdivision_id'=>13743,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Bouches-du-Rhône',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-13'
] );


			
State::create( [
'state_subdivision_id'=>13744,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Cantal',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-15'
] );


			
State::create( [
'state_subdivision_id'=>13745,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Charente-Maritime',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-17'
] );


			
State::create( [
'state_subdivision_id'=>13746,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Cher',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-18'
] );


			
State::create( [
'state_subdivision_id'=>13747,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Corse-du-Sud',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-2A'
] );


			
State::create( [
'state_subdivision_id'=>13748,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Haute-Corse',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-2B'
] );


			
State::create( [
'state_subdivision_id'=>13749,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Haute-Loire',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-43'
] );


			
State::create( [
'state_subdivision_id'=>13750,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Hautes-Alpes',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-05'
] );


			
State::create( [
'state_subdivision_id'=>13751,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Haute-Savoie',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-74'
] );


			
State::create( [
'state_subdivision_id'=>13752,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Hautes-Pyrénées',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-65'
] );


			
State::create( [
'state_subdivision_id'=>13753,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Haut-Rhin',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-68'
] );


			
State::create( [
'state_subdivision_id'=>13754,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Hérault',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-34'
] );


			
State::create( [
'state_subdivision_id'=>13755,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Indre',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-36'
] );


			
State::create( [
'state_subdivision_id'=>13756,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Indre-et-Loire',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-37'
] );


			
State::create( [
'state_subdivision_id'=>13757,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Jura',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-39'
] );


			
State::create( [
'state_subdivision_id'=>13758,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Loire',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-42'
] );


			
State::create( [
'state_subdivision_id'=>13759,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Loiret',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-45'
] );


			
State::create( [
'state_subdivision_id'=>13760,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Loir-et-Cher',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-41'
] );


			
State::create( [
'state_subdivision_id'=>13761,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Lot-et-Garonne',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-47'
] );


			
State::create( [
'state_subdivision_id'=>13762,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Maine-et-Loire',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-49'
] );


			
State::create( [
'state_subdivision_id'=>13763,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Marne',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-51'
] );


			
State::create( [
'state_subdivision_id'=>13764,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Mayenne',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-53'
] );


			
State::create( [
'state_subdivision_id'=>13765,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Meuse',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-55'
] );


			
State::create( [
'state_subdivision_id'=>13766,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Moselle',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-57'
] );


			
State::create( [
'state_subdivision_id'=>13767,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Nord',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-59'
] );


			
State::create( [
'state_subdivision_id'=>13768,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Oise',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-60'
] );


			
State::create( [
'state_subdivision_id'=>13769,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Paris',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-75'
] );


			
State::create( [
'state_subdivision_id'=>13770,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Puy-de-Dôme',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-63'
] );


			
State::create( [
'state_subdivision_id'=>13771,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Pyrénées-Orientales',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-66'
] );


			
State::create( [
'state_subdivision_id'=>13772,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Rhône',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-69'
] );


			
State::create( [
'state_subdivision_id'=>13773,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Sarthe',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-72'
] );


			
State::create( [
'state_subdivision_id'=>13774,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Seine-et-Marne',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-77'
] );


			
State::create( [
'state_subdivision_id'=>13775,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Seine-Saint-Denis',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-93'
] );


			
State::create( [
'state_subdivision_id'=>13776,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Tarn',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-81'
] );


			
State::create( [
'state_subdivision_id'=>13777,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Territoire de Belfort',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-90'
] );


			
State::create( [
'state_subdivision_id'=>13778,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Val-de-Marne',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-94'
] );


			
State::create( [
'state_subdivision_id'=>13779,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Var',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-83'
] );


			
State::create( [
'state_subdivision_id'=>13780,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Vendée',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-85'
] );


			
State::create( [
'state_subdivision_id'=>13781,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Vienne',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-86'
] );


			
State::create( [
'state_subdivision_id'=>13782,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Yonne',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-89'
] );


			
State::create( [
'state_subdivision_id'=>13791,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Corrèze',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-19'
] );


			
State::create( [
'state_subdivision_id'=>13792,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Côte-d Or',
'state_subdivision_alternate_names'=>'Or',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-21',
] );


			
State::create( [
'state_subdivision_id'=>13793,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Côtes-d Armor',
'state_subdivision_alternate_names'=>'Côtes-du-Nord',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-22',
] );


			
State::create( [
'state_subdivision_id'=>13794,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Creuse',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-23'
] );


			
State::create( [
'state_subdivision_id'=>13795,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Deux-Sèvres',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-79'
] );


			
State::create( [
'state_subdivision_id'=>13796,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Dordogne',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-24'
] );


			
State::create( [
'state_subdivision_id'=>13797,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Doubs',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-25'
] );


			
State::create( [
'state_subdivision_id'=>13798,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Lozère',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-48'
] );


			
State::create( [
'state_subdivision_id'=>13799,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Manche',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-50'
] );


			
State::create( [
'state_subdivision_id'=>13800,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Meurthe-et-Moselle',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-54'
] );


			
State::create( [
'state_subdivision_id'=>13801,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Morbihan',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-56'
] );


			
State::create( [
'state_subdivision_id'=>13802,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Nièvre',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-58'
] );


			
State::create( [
'state_subdivision_id'=>13803,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Orne',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-61'
] );


			
State::create( [
'state_subdivision_id'=>13804,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Pas-de-Calais',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-62'
] );


			
State::create( [
'state_subdivision_id'=>13805,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Pyrénées-Atlantiques',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-64'
] );


			
State::create( [
'state_subdivision_id'=>13806,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Saône-et-Loire',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-71'
] );


			
State::create( [
'state_subdivision_id'=>13807,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Haute-Marne',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-52'
] );


			
State::create( [
'state_subdivision_id'=>13808,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Haute-Saône',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-70'
] );


			
State::create( [
'state_subdivision_id'=>13809,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Haute-Vienne',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-87'
] );


			
State::create( [
'state_subdivision_id'=>13810,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Hauts-de-Seine',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-92'
] );


			
State::create( [
'state_subdivision_id'=>13811,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Ille-et-Vilaine',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-35'
] );


			
State::create( [
'state_subdivision_id'=>13812,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Isère',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-38'
] );


			
State::create( [
'state_subdivision_id'=>13813,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Landes',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-40'
] );


			
State::create( [
'state_subdivision_id'=>13814,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Loire-Atlantique',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-44'
] );


			
State::create( [
'state_subdivision_id'=>13815,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Lot',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-46'
] );


			
State::create( [
'state_subdivision_id'=>13816,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Drôme',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-26'
] );


			
State::create( [
'state_subdivision_id'=>13817,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Essonne',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-91'
] );


			
State::create( [
'state_subdivision_id'=>13818,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Eure',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-27'
] );


			
State::create( [
'state_subdivision_id'=>13819,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Eure-et-Loir',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-28'
] );


			
State::create( [
'state_subdivision_id'=>13820,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Finistère',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-29'
] );


			
State::create( [
'state_subdivision_id'=>13821,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Gard',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-30'
] );


			
State::create( [
'state_subdivision_id'=>13822,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Gers',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-32'
] );


			
State::create( [
'state_subdivision_id'=>13823,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Gironde',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-33'
] );


			
State::create( [
'state_subdivision_id'=>13824,
'country_code_char2'=>'FR',
'country_code_char3'=>'FRA',
'state_subdivision_name'=>'Haute-Garonne',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'metropolitan department',
'state_subdivision_code'=>'FR-31'
] );


			
State::create( [
'state_subdivision_id'=>13834,
'country_code_char2'=>'TF',
'country_code_char3'=>'ATF',
'state_subdivision_name'=>'Ile Saint-Paul et Ile Amsterdam',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'district',
'state_subdivision_code'=>'TF-X1~'
] );


			
State::create( [
'state_subdivision_id'=>13836,
'country_code_char2'=>'TF',
'country_code_char3'=>'ATF',
'state_subdivision_name'=>'Crozet Islands',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'district',
'state_subdivision_code'=>'TF-X2~'
] );


			
State::create( [
'state_subdivision_id'=>13837,
'country_code_char2'=>'TF',
'country_code_char3'=>'ATF',
'state_subdivision_name'=>'Kerguelen',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'district',
'state_subdivision_code'=>'TF-X3~'
] );


			
State::create( [
'state_subdivision_id'=>13838,
'country_code_char2'=>'GA',
'country_code_char3'=>'GAB',
'state_subdivision_name'=>'Woleu-Ntem',
'state_subdivision_alternate_names'=>'Woleu-Nʿtem',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'GA-9'
] );


			
State::create( [
'state_subdivision_id'=>13839,
'country_code_char2'=>'GA',
'country_code_char3'=>'GAB',
'state_subdivision_name'=>'Estuaire',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'GA-1'
] );


			
State::create( [
'state_subdivision_id'=>13840,
'country_code_char2'=>'GA',
'country_code_char3'=>'GAB',
'state_subdivision_name'=>'Ogooué-Maritime',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'GA-8'
] );


			
State::create( [
'state_subdivision_id'=>13841,
'country_code_char2'=>'GA',
'country_code_char3'=>'GAB',
'state_subdivision_name'=>'Moyen-Ogooué',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'GA-3'
] );


			
State::create( [
'state_subdivision_id'=>13842,
'country_code_char2'=>'GA',
'country_code_char3'=>'GAB',
'state_subdivision_name'=>'Ogooué-Ivindo',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'GA-6'
] );


			
State::create( [
'state_subdivision_id'=>13843,
'country_code_char2'=>'GA',
'country_code_char3'=>'GAB',
'state_subdivision_name'=>'Ogooué-Lolo',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'GA-7'
] );


			
State::create( [
'state_subdivision_id'=>13844,
'country_code_char2'=>'GA',
'country_code_char3'=>'GAB',
'state_subdivision_name'=>'Ngounié',
'state_subdivision_alternate_names'=>'Nʿgounié',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'GA-4'
] );


			
State::create( [
'state_subdivision_id'=>13845,
'country_code_char2'=>'GA',
'country_code_char3'=>'GAB',
'state_subdivision_name'=>'Haut-Ogooué',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'GA-2'
] );


			
State::create( [
'state_subdivision_id'=>13846,
'country_code_char2'=>'GA',
'country_code_char3'=>'GAB',
'state_subdivision_name'=>'Nyanga',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'GA-5'
] );


			
State::create( [
'state_subdivision_id'=>13877,
'country_code_char2'=>'GM',
'country_code_char3'=>'GMB',
'state_subdivision_name'=>'MacCarthy Island',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'division',
'state_subdivision_code'=>'GM-M'
] );


			
State::create( [
'state_subdivision_id'=>13880,
'country_code_char2'=>'GM',
'country_code_char3'=>'GMB',
'state_subdivision_name'=>'Banjul',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'city',
'state_subdivision_code'=>'GM-B'
] );


			
State::create( [
'state_subdivision_id'=>13881,
'country_code_char2'=>'GM',
'country_code_char3'=>'GMB',
'state_subdivision_name'=>'Upper River',
'state_subdivision_alternate_names'=>'Upper River',
'primary_level_name'=>'division',
'state_subdivision_code'=>'GM-U'
] );


			
State::create( [
'state_subdivision_id'=>13882,
'country_code_char2'=>'GM',
'country_code_char3'=>'GMB',
'state_subdivision_name'=>'Western',
'state_subdivision_alternate_names'=>'Western',
'primary_level_name'=>'division',
'state_subdivision_code'=>'GM-W'
] );


			
State::create( [
'state_subdivision_id'=>13885,
'country_code_char2'=>'GM',
'country_code_char3'=>'GMB',
'state_subdivision_name'=>'North Bank',
'state_subdivision_alternate_names'=>'North Bank',
'primary_level_name'=>'division',
'state_subdivision_code'=>'GM-N'
] );


			
State::create( [
'state_subdivision_id'=>13887,
'country_code_char2'=>'GM',
'country_code_char3'=>'GMB',
'state_subdivision_name'=>'Lower River',
'state_subdivision_alternate_names'=>'Lower River',
'primary_level_name'=>'division',
'state_subdivision_code'=>'GM-L'
] );


			
State::create( [
'state_subdivision_id'=>13895,
'country_code_char2'=>'GE',
'country_code_char3'=>'GEO',
'state_subdivision_name'=>'Tbilisi',
'state_subdivision_alternate_names'=>'Tiflis',
'primary_level_name'=>'city',
'state_subdivision_code'=>'GE-TB'
] );


			
State::create( [
'state_subdivision_id'=>13896,
'country_code_char2'=>'GE',
'country_code_char3'=>'GEO',
'state_subdivision_name'=>'Ajaria',
'state_subdivision_alternate_names'=>'Achara, Adzharia, Adžaria',
'primary_level_name'=>'autonomous republic',
'state_subdivision_code'=>'GE-AJ'
] );


			
State::create( [
'state_subdivision_id'=>13897,
'country_code_char2'=>'GE',
'country_code_char3'=>'GEO',
'state_subdivision_name'=>'Guria',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'region',
'state_subdivision_code'=>'GE-GU'
] );


			
State::create( [
'state_subdivision_id'=>13898,
'country_code_char2'=>'GE',
'country_code_char3'=>'GEO',
'state_subdivision_name'=>'Kakheti',
'state_subdivision_alternate_names'=>'Kaheti',
'primary_level_name'=>'region',
'state_subdivision_code'=>'GE-KA'
] );


			
State::create( [
'state_subdivision_id'=>13899,
'country_code_char2'=>'GE',
'country_code_char3'=>'GEO',
'state_subdivision_name'=>'Racha-Lechkhumi [and] Kvemo Svaneti',
'state_subdivision_alternate_names'=>'Racha, Racha-Lechkumi and Kverno Svaneti',
'primary_level_name'=>'region',
'state_subdivision_code'=>'GE-RL'
] );


			
State::create( [
'state_subdivision_id'=>13900,
'country_code_char2'=>'GE',
'country_code_char3'=>'GEO',
'state_subdivision_name'=>'Kvemo Kartli',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'region',
'state_subdivision_code'=>'GE-KK'
] );


			
State::create( [
'state_subdivision_id'=>13901,
'country_code_char2'=>'GE',
'country_code_char3'=>'GEO',
'state_subdivision_name'=>'Imereti',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'region',
'state_subdivision_code'=>'GE-IM'
] );


			
State::create( [
'state_subdivision_id'=>13902,
'country_code_char2'=>'GE',
'country_code_char3'=>'GEO',
'state_subdivision_name'=>'Abkhazia',
'state_subdivision_alternate_names'=>'Abhasia',
'primary_level_name'=>'autonomous republic',
'state_subdivision_code'=>'GE-AB'
] );


			
State::create( [
'state_subdivision_id'=>13903,
'country_code_char2'=>'GE',
'country_code_char3'=>'GEO',
'state_subdivision_name'=>'Samtskhe-Javakheti',
'state_subdivision_alternate_names'=>'Samche-Žavaheti',
'primary_level_name'=>'region',
'state_subdivision_code'=>'GE-SJ'
] );


			
State::create( [
'state_subdivision_id'=>13904,
'country_code_char2'=>'GE',
'country_code_char3'=>'GEO',
'state_subdivision_name'=>'Shida Kartli',
'state_subdivision_alternate_names'=>'Šida Kartli',
'primary_level_name'=>'region',
'state_subdivision_code'=>'GE-SK'
] );


			
State::create( [
'state_subdivision_id'=>13905,
'country_code_char2'=>'GE',
'country_code_char3'=>'GEO',
'state_subdivision_name'=>'Mtskheta-Mtianeti',
'state_subdivision_alternate_names'=>'Mcheta-Mtianeti',
'primary_level_name'=>'region',
'state_subdivision_code'=>'GE-MM'
] );


			
State::create( [
'state_subdivision_id'=>13906,
'country_code_char2'=>'GE',
'country_code_char3'=>'GEO',
'state_subdivision_name'=>'Samegrelo-Zemo Svaneti',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'region',
'state_subdivision_code'=>'GE-SZ'
] );


			
State::create( [
'state_subdivision_id'=>14044,
'country_code_char2'=>'DE',
'country_code_char3'=>'DEU',
'state_subdivision_name'=>'Bayern',
'state_subdivision_alternate_names'=>'Bavière, Bayern, Bavaria',
'primary_level_name'=>'State',
'state_subdivision_code'=>'DE-BY'
] );


			
State::create( [
'state_subdivision_id'=>14045,
'country_code_char2'=>'DE',
'country_code_char3'=>'DEU',
'state_subdivision_name'=>'Brandenburg',
'state_subdivision_alternate_names'=>'Brandenbourg, Brandenburgo',
'primary_level_name'=>'State',
'state_subdivision_code'=>'DE-BB'
] );


			
State::create( [
'state_subdivision_id'=>14046,
'country_code_char2'=>'DE',
'country_code_char3'=>'DEU',
'state_subdivision_name'=>'Hamburg',
'state_subdivision_alternate_names'=>'Amburgo, Hambourg, Hamburgo',
'primary_level_name'=>'State',
'state_subdivision_code'=>'DE-HH'
] );


			
State::create( [
'state_subdivision_id'=>14047,
'country_code_char2'=>'DE',
'country_code_char3'=>'DEU',
'state_subdivision_name'=>'Mecklenburg-Vorpommern',
'state_subdivision_alternate_names'=>'Mecklenburg-Vorpommern',
'primary_level_name'=>'State',
'state_subdivision_code'=>'DE-MV'
] );


			
State::create( [
'state_subdivision_id'=>14048,
'country_code_char2'=>'DE',
'country_code_char3'=>'DEU',
'state_subdivision_name'=>'Nordrhein-Westfalen',
'state_subdivision_alternate_names'=>'Nordrhein-Westfalen, Rhénanie-Westphalie',
'primary_level_name'=>'State',
'state_subdivision_code'=>'DE-NW'
] );


			
State::create( [
'state_subdivision_id'=>14049,
'country_code_char2'=>'DE',
'country_code_char3'=>'DEU',
'state_subdivision_name'=>'Saarland',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'State',
'state_subdivision_code'=>'DE-SL'
] );


			
State::create( [
'state_subdivision_id'=>14050,
'country_code_char2'=>'DE',
'country_code_char3'=>'DEU',
'state_subdivision_name'=>'Sachsen-Anhalt',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'State',
'state_subdivision_code'=>'DE-ST'
] );


			
State::create( [
'state_subdivision_id'=>14051,
'country_code_char2'=>'DE',
'country_code_char3'=>'DEU',
'state_subdivision_name'=>'Thüringen',
'state_subdivision_alternate_names'=>'Thüringen',
'primary_level_name'=>'State',
'state_subdivision_code'=>'DE-TH'
] );


			
State::create( [
'state_subdivision_id'=>14337,
'country_code_char2'=>'DE',
'country_code_char3'=>'DEU',
'state_subdivision_name'=>'Baden-Württemberg',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'State',
'state_subdivision_code'=>'DE-BW'
] );


			
State::create( [
'state_subdivision_id'=>14338,
'country_code_char2'=>'DE',
'country_code_char3'=>'DEU',
'state_subdivision_name'=>'Berlin',
'state_subdivision_alternate_names'=>'Berlín',
'primary_level_name'=>'State',
'state_subdivision_code'=>'DE-BE'
] );


			
State::create( [
'state_subdivision_id'=>14339,
'country_code_char2'=>'DE',
'country_code_char3'=>'DEU',
'state_subdivision_name'=>'Bremen',
'state_subdivision_alternate_names'=>'Brème',
'primary_level_name'=>'State',
'state_subdivision_code'=>'DE-HB'
] );


			
State::create( [
'state_subdivision_id'=>14340,
'country_code_char2'=>'DE',
'country_code_char3'=>'DEU',
'state_subdivision_name'=>'Hessen',
'state_subdivision_alternate_names'=>'Hessen, Hesse',
'primary_level_name'=>'State',
'state_subdivision_code'=>'DE-HE'
] );


			
State::create( [
'state_subdivision_id'=>14341,
'country_code_char2'=>'DE',
'country_code_char3'=>'DEU',
'state_subdivision_name'=>'Niedersachsen',
'state_subdivision_alternate_names'=>'Niedersachsen',
'primary_level_name'=>'State',
'state_subdivision_code'=>'DE-NI'
] );


			
State::create( [
'state_subdivision_id'=>14342,
'country_code_char2'=>'DE',
'country_code_char3'=>'DEU',
'state_subdivision_name'=>'Rheinland-Pfalz',
'state_subdivision_alternate_names'=>'Rheinland-Pfalz, Rhénanie-Palatinat',
'primary_level_name'=>'State',
'state_subdivision_code'=>'DE-RP'
] );


			
State::create( [
'state_subdivision_id'=>14343,
'country_code_char2'=>'DE',
'country_code_char3'=>'DEU',
'state_subdivision_name'=>'Sachsen',
'state_subdivision_alternate_names'=>'Sachsen',
'primary_level_name'=>'State',
'state_subdivision_code'=>'DE-SN'
] );


			
State::create( [
'state_subdivision_id'=>14344,
'country_code_char2'=>'DE',
'country_code_char3'=>'DEU',
'state_subdivision_name'=>'Schleswig-Holstein',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'State',
'state_subdivision_code'=>'DE-SH'
] );


			
State::create( [
'state_subdivision_id'=>14397,
'country_code_char2'=>'GH',
'country_code_char3'=>'GHA',
'state_subdivision_name'=>'Upper West',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'GH-UW'
] );


			
State::create( [
'state_subdivision_id'=>14398,
'country_code_char2'=>'GH',
'country_code_char3'=>'GHA',
'state_subdivision_name'=>'Western',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'GH-WP'
] );


			
State::create( [
'state_subdivision_id'=>14399,
'country_code_char2'=>'GH',
'country_code_char3'=>'GHA',
'state_subdivision_name'=>'Greater Accra',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'GH-AA'
] );


			
State::create( [
'state_subdivision_id'=>14400,
'country_code_char2'=>'GH',
'country_code_char3'=>'GHA',
'state_subdivision_name'=>'Brong-Ahafo',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'GH-BA'
] );


			
State::create( [
'state_subdivision_id'=>14401,
'country_code_char2'=>'GH',
'country_code_char3'=>'GHA',
'state_subdivision_name'=>'Volta',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'GH-TV'
] );


			
State::create( [
'state_subdivision_id'=>14402,
'country_code_char2'=>'GH',
'country_code_char3'=>'GHA',
'state_subdivision_name'=>'Northern',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'GH-NP'
] );


			
State::create( [
'state_subdivision_id'=>14403,
'country_code_char2'=>'GH',
'country_code_char3'=>'GHA',
'state_subdivision_name'=>'Ashanti',
'state_subdivision_alternate_names'=>'Asante',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'GH-AH'
] );


			
State::create( [
'state_subdivision_id'=>14404,
'country_code_char2'=>'GH',
'country_code_char3'=>'GHA',
'state_subdivision_name'=>'Central',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'GH-CP'
] );


			
State::create( [
'state_subdivision_id'=>14405,
'country_code_char2'=>'GH',
'country_code_char3'=>'GHA',
'state_subdivision_name'=>'Eastern',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'GH-EP'
] );


			
State::create( [
'state_subdivision_id'=>14406,
'country_code_char2'=>'GH',
'country_code_char3'=>'GHA',
'state_subdivision_name'=>'Upper East',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'GH-UE'
] );


			
State::create( [
'state_subdivision_id'=>14408,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Xanthi',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-72'
] );


			
State::create( [
'state_subdivision_id'=>14409,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Trikala',
'state_subdivision_alternate_names'=>'Trikala, Trikkala',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-44'
] );


			
State::create( [
'state_subdivision_id'=>14410,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Thesprotia',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-32'
] );


			
State::create( [
'state_subdivision_id'=>14411,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Samos',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-84'
] );


			
State::create( [
'state_subdivision_id'=>14412,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Pieria',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-61'
] );


			
State::create( [
'state_subdivision_id'=>14413,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Lesvos',
'state_subdivision_alternate_names'=>'Lesbos',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-83'
] );


			
State::create( [
'state_subdivision_id'=>14414,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Achaïa',
'state_subdivision_alternate_names'=>'Achaia, Akhaia',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-13'
] );


			
State::create( [
'state_subdivision_id'=>14415,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Argolida',
'state_subdivision_alternate_names'=>'Argolis',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-11'
] );


			
State::create( [
'state_subdivision_id'=>14416,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Attiki',
'state_subdivision_alternate_names'=>'Attica, Attika',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-A1'
] );


			
State::create( [
'state_subdivision_id'=>14417,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Agio Oros',
'state_subdivision_alternate_names'=>'Aghion Oros, Agion Oros, Akte, Aktí, Athos, Mount Athos',
'primary_level_name'=>'self-governed part',
'state_subdivision_code'=>'GR-69'
] );


			
State::create( [
'state_subdivision_id'=>14418,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Evrytania',
'state_subdivision_alternate_names'=>'Evrytania',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-05'
] );


			
State::create( [
'state_subdivision_id'=>14419,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Evvoia',
'state_subdivision_alternate_names'=>'Euboea, Evvoia',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-04'
] );


			
State::create( [
'state_subdivision_id'=>14420,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Fthiotida',
'state_subdivision_alternate_names'=>'Phtiotis',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-06'
] );


			
State::create( [
'state_subdivision_id'=>14421,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Chalkidiki',
'state_subdivision_alternate_names'=>'Chalcidice, Khalkikdiki',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-64'
] );


			
State::create( [
'state_subdivision_id'=>14422,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Chios',
'state_subdivision_alternate_names'=>'Chios, Khios',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-85'
] );


			
State::create( [
'state_subdivision_id'=>14423,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Aitolia kai Akarnania',
'state_subdivision_alternate_names'=>'Aetolia and Acarnania, Áitoloakarnanía',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-01'
] );


			
State::create( [
'state_subdivision_id'=>14424,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Arkadia',
'state_subdivision_alternate_names'=>'Arcadia',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-12'
] );


			
State::create( [
'state_subdivision_id'=>14425,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Arta',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-31'
] );


			
State::create( [
'state_subdivision_id'=>14426,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Dodekanisos',
'state_subdivision_alternate_names'=>'Dodecanese, Dodekanes',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-81'
] );


			
State::create( [
'state_subdivision_id'=>14427,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Drama',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-52'
] );


			
State::create( [
'state_subdivision_id'=>14428,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Evros',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-71'
] );


			
State::create( [
'state_subdivision_id'=>14429,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Florina',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-63'
] );


			
State::create( [
'state_subdivision_id'=>14430,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Fokida',
'state_subdivision_alternate_names'=>'Phocis, Phokis',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-07'
] );


			
State::create( [
'state_subdivision_id'=>14431,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Grevena',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-51'
] );


			
State::create( [
'state_subdivision_id'=>14432,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Chania',
'state_subdivision_alternate_names'=>'Canea, Chania, Khaniá, La Canée',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-94'
] );


			
State::create( [
'state_subdivision_id'=>14433,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Ileia',
'state_subdivision_alternate_names'=>'Elia',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-14'
] );


			
State::create( [
'state_subdivision_id'=>14434,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Irakleio',
'state_subdivision_alternate_names'=>'Candia, Herakleion, Heraklion, Iraclion, Iraklio',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-91'
] );


			
State::create( [
'state_subdivision_id'=>14435,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Karditsa',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-41'
] );


			
State::create( [
'state_subdivision_id'=>14436,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Kavala',
'state_subdivision_alternate_names'=>'Cavalla, Kaválla',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-55'
] );


			
State::create( [
'state_subdivision_id'=>14437,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Kyklades',
'state_subdivision_alternate_names'=>'Cyclades, Kykladen',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-82'
] );


			
State::create( [
'state_subdivision_id'=>14438,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Korinthia',
'state_subdivision_alternate_names'=>'Corinth, Korinth, Kórinthos',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-15'
] );


			
State::create( [
'state_subdivision_id'=>14439,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Lakonia',
'state_subdivision_alternate_names'=>'Laconia',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-16'
] );


			
State::create( [
'state_subdivision_id'=>14440,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Lasithi',
'state_subdivision_alternate_names'=>'Lassithi',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-92'
] );


			
State::create( [
'state_subdivision_id'=>14441,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Lefkada',
'state_subdivision_alternate_names'=>'Leucas, Levkáda, Santa Maura',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-24'
] );


			
State::create( [
'state_subdivision_id'=>14442,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Messinia',
'state_subdivision_alternate_names'=>'Messenia',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-17'
] );


			
State::create( [
'state_subdivision_id'=>14443,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Pella',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-59'
] );


			
State::create( [
'state_subdivision_id'=>14444,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Preveza',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-34'
] );


			
State::create( [
'state_subdivision_id'=>14445,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Rodopi',
'state_subdivision_alternate_names'=>'Rhodope',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-73'
] );


			
State::create( [
'state_subdivision_id'=>14446,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Serres',
'state_subdivision_alternate_names'=>'Serres',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-62'
] );


			
State::create( [
'state_subdivision_id'=>14447,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Thessaloniki',
'state_subdivision_alternate_names'=>'Salonika, Salonike, Saloniki, Thessalonike',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-54'
] );


			
State::create( [
'state_subdivision_id'=>14448,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Voiotia',
'state_subdivision_alternate_names'=>'Boeotia',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-03'
] );


			
State::create( [
'state_subdivision_id'=>14449,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Zakynthos',
'state_subdivision_alternate_names'=>'Zakynthos, Zante, Zanti',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-21'
] );


			
State::create( [
'state_subdivision_id'=>14450,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Imathia',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-53'
] );


			
State::create( [
'state_subdivision_id'=>14451,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Ioannina',
'state_subdivision_alternate_names'=>'Yannina',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-33'
] );


			
State::create( [
'state_subdivision_id'=>14452,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Kastoria',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-56'
] );


			
State::create( [
'state_subdivision_id'=>14453,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Kefallonia',
'state_subdivision_alternate_names'=>'Cephalonia, Kefallinia',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-23'
] );


			
State::create( [
'state_subdivision_id'=>14454,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Kerkyra',
'state_subdivision_alternate_names'=>'Corfu, Kerkyra, Korfu',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-22'
] );


			
State::create( [
'state_subdivision_id'=>14455,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Kilkis',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-57'
] );


			
State::create( [
'state_subdivision_id'=>14456,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Kozani',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-58'
] );


			
State::create( [
'state_subdivision_id'=>14457,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Larisa',
'state_subdivision_alternate_names'=>'Larissa',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-42'
] );


			
State::create( [
'state_subdivision_id'=>14458,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Magnisia',
'state_subdivision_alternate_names'=>'Magnesia, Magnessia',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-43'
] );


			
State::create( [
'state_subdivision_id'=>14459,
'country_code_char2'=>'GR',
'country_code_char3'=>'GRC',
'state_subdivision_name'=>'Rethymno',
'state_subdivision_alternate_names'=>'Rethymno',
'primary_level_name'=>'department',
'state_subdivision_code'=>'GR-93'
] );


			
State::create( [
'state_subdivision_id'=>14480,
'country_code_char2'=>'GD',
'country_code_char3'=>'GRD',
'state_subdivision_name'=>'Saint Mark',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'GD-05'
] );


			
State::create( [
'state_subdivision_id'=>14481,
'country_code_char2'=>'GD',
'country_code_char3'=>'GRD',
'state_subdivision_name'=>'Southern Grenadine Islands',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Dependency',
'state_subdivision_code'=>'GD-10'
] );


			
State::create( [
'state_subdivision_id'=>14482,
'country_code_char2'=>'GD',
'country_code_char3'=>'GRD',
'state_subdivision_name'=>'Saint Patrick',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'GD-06'
] );


			
State::create( [
'state_subdivision_id'=>14483,
'country_code_char2'=>'GD',
'country_code_char3'=>'GRD',
'state_subdivision_name'=>'Saint John',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'GD-04'
] );


			
State::create( [
'state_subdivision_id'=>14484,
'country_code_char2'=>'GD',
'country_code_char3'=>'GRD',
'state_subdivision_name'=>'Saint Andrew',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'GD-01'
] );


			
State::create( [
'state_subdivision_id'=>14485,
'country_code_char2'=>'GD',
'country_code_char3'=>'GRD',
'state_subdivision_name'=>'Saint George',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'GD-03'
] );


			
State::create( [
'state_subdivision_id'=>14486,
'country_code_char2'=>'GD',
'country_code_char3'=>'GRD',
'state_subdivision_name'=>'Saint David',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'GD-02'
] );


			
State::create( [
'state_subdivision_id'=>14521,
'country_code_char2'=>'GT',
'country_code_char3'=>'GTM',
'state_subdivision_name'=>'Totonicapán',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'GT-TO'
] );


			
State::create( [
'state_subdivision_id'=>14522,
'country_code_char2'=>'GT',
'country_code_char3'=>'GTM',
'state_subdivision_name'=>'Sololá',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'GT-SO'
] );


			
State::create( [
'state_subdivision_id'=>14523,
'country_code_char2'=>'GT',
'country_code_char3'=>'GTM',
'state_subdivision_name'=>'San Marcos',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'GT-SM'
] );


			
State::create( [
'state_subdivision_id'=>14524,
'country_code_char2'=>'GT',
'country_code_char3'=>'GTM',
'state_subdivision_name'=>'Retalhuleu',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'GT-RE'
] );


			
State::create( [
'state_subdivision_id'=>14525,
'country_code_char2'=>'GT',
'country_code_char3'=>'GTM',
'state_subdivision_name'=>'Quetzaltenango',
'state_subdivision_alternate_names'=>'Quetzaltenango',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'GT-QZ'
] );


			
State::create( [
'state_subdivision_id'=>14526,
'country_code_char2'=>'GT',
'country_code_char3'=>'GTM',
'state_subdivision_name'=>'Baja Verapaz',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'GT-BV'
] );


			
State::create( [
'state_subdivision_id'=>14527,
'country_code_char2'=>'GT',
'country_code_char3'=>'GTM',
'state_subdivision_name'=>'Chiquimula',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'GT-CQ'
] );


			
State::create( [
'state_subdivision_id'=>14528,
'country_code_char2'=>'GT',
'country_code_char3'=>'GTM',
'state_subdivision_name'=>'Escuintla',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'GT-ES'
] );


			
State::create( [
'state_subdivision_id'=>14529,
'country_code_char2'=>'GT',
'country_code_char3'=>'GTM',
'state_subdivision_name'=>'Guatemala',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'GT-GU'
] );


			
State::create( [
'state_subdivision_id'=>14530,
'country_code_char2'=>'GT',
'country_code_char3'=>'GTM',
'state_subdivision_name'=>'Zacapa',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'GT-ZA'
] );


			
State::create( [
'state_subdivision_id'=>14531,
'country_code_char2'=>'GT',
'country_code_char3'=>'GTM',
'state_subdivision_name'=>'Alta Verapaz',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'GT-AV'
] );


			
State::create( [
'state_subdivision_id'=>14532,
'country_code_char2'=>'GT',
'country_code_char3'=>'GTM',
'state_subdivision_name'=>'Chimaltenango',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'GT-CM'
] );


			
State::create( [
'state_subdivision_id'=>14533,
'country_code_char2'=>'GT',
'country_code_char3'=>'GTM',
'state_subdivision_name'=>'El Progreso',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'GT-PR'
] );


			
State::create( [
'state_subdivision_id'=>14534,
'country_code_char2'=>'GT',
'country_code_char3'=>'GTM',
'state_subdivision_name'=>'Huehuetenango',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'GT-HU'
] );


			
State::create( [
'state_subdivision_id'=>14535,
'country_code_char2'=>'GT',
'country_code_char3'=>'GTM',
'state_subdivision_name'=>'Izabal',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'GT-IZ'
] );


			
State::create( [
'state_subdivision_id'=>14536,
'country_code_char2'=>'GT',
'country_code_char3'=>'GTM',
'state_subdivision_name'=>'Jalapa',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'GT-JA'
] );


			
State::create( [
'state_subdivision_id'=>14537,
'country_code_char2'=>'GT',
'country_code_char3'=>'GTM',
'state_subdivision_name'=>'Jutiapa',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'GT-JU'
] );


			
State::create( [
'state_subdivision_id'=>14538,
'country_code_char2'=>'GT',
'country_code_char3'=>'GTM',
'state_subdivision_name'=>'Petén',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'GT-PE'
] );


			
State::create( [
'state_subdivision_id'=>14539,
'country_code_char2'=>'GT',
'country_code_char3'=>'GTM',
'state_subdivision_name'=>'Quiché',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'GT-QC'
] );


			
State::create( [
'state_subdivision_id'=>14540,
'country_code_char2'=>'GT',
'country_code_char3'=>'GTM',
'state_subdivision_name'=>'Sacatepéquez',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'GT-SA'
] );


			
State::create( [
'state_subdivision_id'=>14541,
'country_code_char2'=>'GT',
'country_code_char3'=>'GTM',
'state_subdivision_name'=>'Santa Rosa',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'GT-SR'
] );


			
State::create( [
'state_subdivision_id'=>14542,
'country_code_char2'=>'GT',
'country_code_char3'=>'GTM',
'state_subdivision_name'=>'Suchitepéquez',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'GT-SU'
] );


			
State::create( [
'state_subdivision_id'=>14556,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Tougué',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-TO'
] );


			
State::create( [
'state_subdivision_id'=>14557,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Pita',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-PI'
] );


			
State::create( [
'state_subdivision_id'=>14558,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Mandiana',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-MD'
] );


			
State::create( [
'state_subdivision_id'=>14559,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Mali',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-ML'
] );


			
State::create( [
'state_subdivision_id'=>14560,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Kouroussa',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-KO'
] );


			
State::create( [
'state_subdivision_id'=>14561,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Kérouané',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-KE'
] );


			
State::create( [
'state_subdivision_id'=>14565,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Beyla',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-BE'
] );


			
State::create( [
'state_subdivision_id'=>14566,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Boffa',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-BF'
] );


			
State::create( [
'state_subdivision_id'=>14567,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Boké',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-BK'
] );


			
State::create( [
'state_subdivision_id'=>14568,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Conakry',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-C'
] );


			
State::create( [
'state_subdivision_id'=>14569,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Coyah',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-CO'
] );


			
State::create( [
'state_subdivision_id'=>14570,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Dalaba',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-DL'
] );


			
State::create( [
'state_subdivision_id'=>14571,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Forécariah',
'state_subdivision_alternate_names'=>'Forécaria',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-FO'
] );


			
State::create( [
'state_subdivision_id'=>14572,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Gaoual',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-GA'
] );


			
State::create( [
'state_subdivision_id'=>14573,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Dubréka',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-DU'
] );


			
State::create( [
'state_subdivision_id'=>14575,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Dabola',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-DB'
] );


			
State::create( [
'state_subdivision_id'=>14576,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Dinguiraye',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-DI'
] );


			
State::create( [
'state_subdivision_id'=>14577,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Faranah',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-FA'
] );


			
State::create( [
'state_subdivision_id'=>14578,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Fria',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-FR'
] );


			
State::create( [
'state_subdivision_id'=>14579,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Guékédou',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-GU'
] );


			
State::create( [
'state_subdivision_id'=>14580,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Kankan',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-KA'
] );


			
State::create( [
'state_subdivision_id'=>14581,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Kindia',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-KD'
] );


			
State::create( [
'state_subdivision_id'=>14582,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Koubia',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-KB'
] );


			
State::create( [
'state_subdivision_id'=>14583,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Koundara',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-KN'
] );


			
State::create( [
'state_subdivision_id'=>14584,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Labé',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-LA'
] );


			
State::create( [
'state_subdivision_id'=>14585,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Lola',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-LO'
] );


			
State::create( [
'state_subdivision_id'=>14586,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Macenta',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-MC'
] );


			
State::create( [
'state_subdivision_id'=>14587,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Mamou',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-MM'
] );


			
State::create( [
'state_subdivision_id'=>14588,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Nzérékoré',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-NZ'
] );


			
State::create( [
'state_subdivision_id'=>14589,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Siguiri',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-SI'
] );


			
State::create( [
'state_subdivision_id'=>14590,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Télimélé',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-TE'
] );


			
State::create( [
'state_subdivision_id'=>14591,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Yomou',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-YO'
] );


			
State::create( [
'state_subdivision_id'=>14592,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Kissidougou',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-KS'
] );


			
State::create( [
'state_subdivision_id'=>14593,
'country_code_char2'=>'GN',
'country_code_char3'=>'GIN',
'state_subdivision_name'=>'Lélouma',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Perfecture',
'state_subdivision_code'=>'GN-LE'
] );


			
State::create( [
'state_subdivision_id'=>14594,
'country_code_char2'=>'GW',
'country_code_char3'=>'GNB',
'state_subdivision_name'=>'Quinara',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'region',
'state_subdivision_code'=>'GW-QU'
] );


			
State::create( [
'state_subdivision_id'=>14595,
'country_code_char2'=>'GW',
'country_code_char3'=>'GNB',
'state_subdivision_name'=>'Bafatá',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'region',
'state_subdivision_code'=>'GW-BA'
] );


			
State::create( [
'state_subdivision_id'=>14596,
'country_code_char2'=>'GW',
'country_code_char3'=>'GNB',
'state_subdivision_name'=>'Oio',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'region',
'state_subdivision_code'=>'GW-OI'
] );


			
State::create( [
'state_subdivision_id'=>14597,
'country_code_char2'=>'GW',
'country_code_char3'=>'GNB',
'state_subdivision_name'=>'Bissau',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'autonomous sector',
'state_subdivision_code'=>'GW-BS'
] );


			
State::create( [
'state_subdivision_id'=>14598,
'country_code_char2'=>'GW',
'country_code_char3'=>'GNB',
'state_subdivision_name'=>'Biombo',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'region',
'state_subdivision_code'=>'GW-BM'
] );


			
State::create( [
'state_subdivision_id'=>14599,
'country_code_char2'=>'GW',
'country_code_char3'=>'GNB',
'state_subdivision_name'=>'Cacheu',
'state_subdivision_alternate_names'=>'Cacheo',
'primary_level_name'=>'region',
'state_subdivision_code'=>'GW-CA'
] );


			
State::create( [
'state_subdivision_id'=>14600,
'country_code_char2'=>'GW',
'country_code_char3'=>'GNB',
'state_subdivision_name'=>'Tombali',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'region',
'state_subdivision_code'=>'GW-TO'
] );


			
State::create( [
'state_subdivision_id'=>14601,
'country_code_char2'=>'GW',
'country_code_char3'=>'GNB',
'state_subdivision_name'=>'Bolama',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'region',
'state_subdivision_code'=>'GW-BL'
] );


			
State::create( [
'state_subdivision_id'=>14602,
'country_code_char2'=>'GW',
'country_code_char3'=>'GNB',
'state_subdivision_name'=>'Gabú',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'region',
'state_subdivision_code'=>'GW-GA'
] );


			
State::create( [
'state_subdivision_id'=>14603,
'country_code_char2'=>'GY',
'country_code_char3'=>'GUY',
'state_subdivision_name'=>'Upper Demerara-Berbice',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'GY-UD'
] );


			
State::create( [
'state_subdivision_id'=>14604,
'country_code_char2'=>'GY',
'country_code_char3'=>'GUY',
'state_subdivision_name'=>'Pomeroon-Supenaam',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'GY-PM'
] );


			
State::create( [
'state_subdivision_id'=>14605,
'country_code_char2'=>'GY',
'country_code_char3'=>'GUY',
'state_subdivision_name'=>'Barima-Waini',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'GY-BA'
] );


			
State::create( [
'state_subdivision_id'=>14606,
'country_code_char2'=>'GY',
'country_code_char3'=>'GUY',
'state_subdivision_name'=>'Demerara-Mahaica',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'GY-DE'
] );


			
State::create( [
'state_subdivision_id'=>14607,
'country_code_char2'=>'GY',
'country_code_char3'=>'GUY',
'state_subdivision_name'=>'Essequibo Islands-West Demerara',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'GY-ES'
] );


			
State::create( [
'state_subdivision_id'=>14608,
'country_code_char2'=>'GY',
'country_code_char3'=>'GUY',
'state_subdivision_name'=>'Mahaica-Berbice',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'GY-MA'
] );


			
State::create( [
'state_subdivision_id'=>14609,
'country_code_char2'=>'GY',
'country_code_char3'=>'GUY',
'state_subdivision_name'=>'Potaro-Siparuni',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'GY-PT'
] );


			
State::create( [
'state_subdivision_id'=>14610,
'country_code_char2'=>'GY',
'country_code_char3'=>'GUY',
'state_subdivision_name'=>'Upper Takutu-Upper Essequibo',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'GY-UT'
] );


			
State::create( [
'state_subdivision_id'=>14611,
'country_code_char2'=>'GY',
'country_code_char3'=>'GUY',
'state_subdivision_name'=>'East Berbice-Corentyne',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'GY-EB'
] );


			
State::create( [
'state_subdivision_id'=>14612,
'country_code_char2'=>'GY',
'country_code_char3'=>'GUY',
'state_subdivision_name'=>'Cuyuni-Mazaruni',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'GY-CU'
] );


			
State::create( [
'state_subdivision_id'=>14613,
'country_code_char2'=>'HT',
'country_code_char3'=>'HTI',
'state_subdivision_name'=>'Sud',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'HT-SD'
] );


			
State::create( [
'state_subdivision_id'=>14614,
'country_code_char2'=>'HT',
'country_code_char3'=>'HTI',
'state_subdivision_name'=>'Nord-Ouest',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'HT-NO'
] );


			
State::create( [
'state_subdivision_id'=>14615,
'country_code_char2'=>'HT',
'country_code_char3'=>'HTI',
'state_subdivision_name'=>'Ouest',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'HT-OU'
] );


			
State::create( [
'state_subdivision_id'=>14616,
'country_code_char2'=>'HT',
'country_code_char3'=>'HTI',
'state_subdivision_name'=>'Nord',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'HT-ND'
] );


			
State::create( [
'state_subdivision_id'=>14617,
'country_code_char2'=>'HT',
'country_code_char3'=>'HTI',
'state_subdivision_name'=>'Centre',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'HT-CE'
] );


			
State::create( [
'state_subdivision_id'=>14618,
'country_code_char2'=>'HT',
'country_code_char3'=>'HTI',
'state_subdivision_name'=>'Nord-Est',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'HT-NE'
] );


			
State::create( [
'state_subdivision_id'=>14619,
'country_code_char2'=>'HT',
'country_code_char3'=>'HTI',
'state_subdivision_name'=>'Sud-Est',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'HT-SE'
] );


			
State::create( [
'state_subdivision_id'=>14620,
'country_code_char2'=>'HT',
'country_code_char3'=>'HTI',
'state_subdivision_name'=>'Grande-Anse',
'state_subdivision_alternate_names'=>'Grande Anse',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'HT-GA'
] );


			
State::create( [
'state_subdivision_id'=>14621,
'country_code_char2'=>'HT',
'country_code_char3'=>'HTI',
'state_subdivision_name'=>'Artibonite',
'state_subdivision_alternate_names'=>'LʿArtibonite',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'HT-AR'
] );


			
State::create( [
'state_subdivision_id'=>14622,
'country_code_char2'=>'HN',
'country_code_char3'=>'HND',
'state_subdivision_name'=>'Valle',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'HN-VA'
] );


			
State::create( [
'state_subdivision_id'=>14623,
'country_code_char2'=>'HN',
'country_code_char3'=>'HND',
'state_subdivision_name'=>'Intibucá',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'HN-IN'
] );


			
State::create( [
'state_subdivision_id'=>14624,
'country_code_char2'=>'HN',
'country_code_char3'=>'HND',
'state_subdivision_name'=>'Choluteca',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'HN-CH'
] );


			
State::create( [
'state_subdivision_id'=>14625,
'country_code_char2'=>'HN',
'country_code_char3'=>'HND',
'state_subdivision_name'=>'Colón',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'HN-CL'
] );


			
State::create( [
'state_subdivision_id'=>14626,
'country_code_char2'=>'HN',
'country_code_char3'=>'HND',
'state_subdivision_name'=>'Copán',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'HN-CP'
] );


			
State::create( [
'state_subdivision_id'=>14628,
'country_code_char2'=>'HN',
'country_code_char3'=>'HND',
'state_subdivision_name'=>'Francisco Morazán',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'HN-FM'
] );


			
State::create( [
'state_subdivision_id'=>14629,
'country_code_char2'=>'HN',
'country_code_char3'=>'HND',
'state_subdivision_name'=>'Gracias a Dios',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'HN-GD'
] );


			
State::create( [
'state_subdivision_id'=>14630,
'country_code_char2'=>'HN',
'country_code_char3'=>'HND',
'state_subdivision_name'=>'Islas de la Bahía',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'HN-IB'
] );


			
State::create( [
'state_subdivision_id'=>14631,
'country_code_char2'=>'HN',
'country_code_char3'=>'HND',
'state_subdivision_name'=>'Lempira',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'HN-LE'
] );


			
State::create( [
'state_subdivision_id'=>14632,
'country_code_char2'=>'HN',
'country_code_char3'=>'HND',
'state_subdivision_name'=>'Olancho',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'HN-OL'
] );


			
State::create( [
'state_subdivision_id'=>14633,
'country_code_char2'=>'HN',
'country_code_char3'=>'HND',
'state_subdivision_name'=>'Santa Bárbara',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'HN-SB'
] );


			
State::create( [
'state_subdivision_id'=>14634,
'country_code_char2'=>'HN',
'country_code_char3'=>'HND',
'state_subdivision_name'=>'Yoro',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'HN-YO'
] );


			
State::create( [
'state_subdivision_id'=>14635,
'country_code_char2'=>'HN',
'country_code_char3'=>'HND',
'state_subdivision_name'=>'Atlántida',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'HN-AT'
] );


			
State::create( [
'state_subdivision_id'=>14636,
'country_code_char2'=>'HN',
'country_code_char3'=>'HND',
'state_subdivision_name'=>'Comayagua',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'HN-CM'
] );


			
State::create( [
'state_subdivision_id'=>14637,
'country_code_char2'=>'HN',
'country_code_char3'=>'HND',
'state_subdivision_name'=>'Cortés',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'HN-CR'
] );


			
State::create( [
'state_subdivision_id'=>14638,
'country_code_char2'=>'HN',
'country_code_char3'=>'HND',
'state_subdivision_name'=>'El Paraíso',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'HN-EP'
] );


			
State::create( [
'state_subdivision_id'=>14639,
'country_code_char2'=>'HN',
'country_code_char3'=>'HND',
'state_subdivision_name'=>'La Paz',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'HN-LP'
] );


			
State::create( [
'state_subdivision_id'=>14640,
'country_code_char2'=>'HN',
'country_code_char3'=>'HND',
'state_subdivision_name'=>'Ocotepeque',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Department',
'state_subdivision_code'=>'HN-OC'
] );


			
State::create( [
'state_subdivision_id'=>14641,
'country_code_char2'=>'HU',
'country_code_char3'=>'HUN',
'state_subdivision_name'=>'Zala',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HU-ZA'
] );


			
State::create( [
'state_subdivision_id'=>14642,
'country_code_char2'=>'HU',
'country_code_char3'=>'HUN',
'state_subdivision_name'=>'Tolna',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HU-TO'
] );


			
State::create( [
'state_subdivision_id'=>14643,
'country_code_char2'=>'HU',
'country_code_char3'=>'HUN',
'state_subdivision_name'=>'Pest',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HU-PE'
] );


			
State::create( [
'state_subdivision_id'=>14644,
'country_code_char2'=>'HU',
'country_code_char3'=>'HUN',
'state_subdivision_name'=>'Komárom-Esztergom',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HU-KE'
] );


			
State::create( [
'state_subdivision_id'=>14645,
'country_code_char2'=>'HU',
'country_code_char3'=>'HUN',
'state_subdivision_name'=>'Fejér',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HU-FE'
] );


			
State::create( [
'state_subdivision_id'=>14646,
'country_code_char2'=>'HU',
'country_code_char3'=>'HUN',
'state_subdivision_name'=>'Baranya',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HU-BA'
] );


			
State::create( [
'state_subdivision_id'=>14647,
'country_code_char2'=>'HU',
'country_code_char3'=>'HUN',
'state_subdivision_name'=>'Bács-Kiskun',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HU-BK'
] );


			
State::create( [
'state_subdivision_id'=>14648,
'country_code_char2'=>'HU',
'country_code_char3'=>'HUN',
'state_subdivision_name'=>'Békés',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HU-BE'
] );


			
State::create( [
'state_subdivision_id'=>14649,
'country_code_char2'=>'HU',
'country_code_char3'=>'HUN',
'state_subdivision_name'=>'Budapest',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'capital city',
'state_subdivision_code'=>'HU-BU'
] );


			
State::create( [
'state_subdivision_id'=>14650,
'country_code_char2'=>'HU',
'country_code_char3'=>'HUN',
'state_subdivision_name'=>'Csongrád',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HU-CS'
] );


			
State::create( [
'state_subdivision_id'=>14651,
'country_code_char2'=>'HU',
'country_code_char3'=>'HUN',
'state_subdivision_name'=>'Gyor-Moson-Sopron',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HU-GS'
] );


			
State::create( [
'state_subdivision_id'=>14652,
'country_code_char2'=>'HU',
'country_code_char3'=>'HUN',
'state_subdivision_name'=>'Heves',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HU-HE'
] );


			
State::create( [
'state_subdivision_id'=>14653,
'country_code_char2'=>'HU',
'country_code_char3'=>'HUN',
'state_subdivision_name'=>'Jász-Nagykun-Szolnok',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HU-JN'
] );


			
State::create( [
'state_subdivision_id'=>14654,
'country_code_char2'=>'HU',
'country_code_char3'=>'HUN',
'state_subdivision_name'=>'Nógrád',
'state_subdivision_alternate_names'=>'Novohrad',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HU-NO'
] );


			
State::create( [
'state_subdivision_id'=>14655,
'country_code_char2'=>'HU',
'country_code_char3'=>'HUN',
'state_subdivision_name'=>'Somogy',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HU-SO'
] );


			
State::create( [
'state_subdivision_id'=>14656,
'country_code_char2'=>'HU',
'country_code_char3'=>'HUN',
'state_subdivision_name'=>'Szabolcs-Szatmár-Bereg',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HU-SZ'
] );


			
State::create( [
'state_subdivision_id'=>14657,
'country_code_char2'=>'HU',
'country_code_char3'=>'HUN',
'state_subdivision_name'=>'Vas',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HU-VA'
] );


			
State::create( [
'state_subdivision_id'=>14658,
'country_code_char2'=>'HU',
'country_code_char3'=>'HUN',
'state_subdivision_name'=>'Veszprém',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HU-VE'
] );


			
State::create( [
'state_subdivision_id'=>14660,
'country_code_char2'=>'HU',
'country_code_char3'=>'HUN',
'state_subdivision_name'=>'Borsod-Abaúj-Zemplén',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HU-BZ'
] );


			
State::create( [
'state_subdivision_id'=>14661,
'country_code_char2'=>'HU',
'country_code_char3'=>'HUN',
'state_subdivision_name'=>'Hajdú-Bihar',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'county',
'state_subdivision_code'=>'HU-HB'
] );


			
State::create( [
'state_subdivision_id'=>14662,
'country_code_char2'=>'IS',
'country_code_char3'=>'ISL',
'state_subdivision_name'=>'Vesturland',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'IS-3'
] );


			
State::create( [
'state_subdivision_id'=>14663,
'country_code_char2'=>'IS',
'country_code_char3'=>'ISL',
'state_subdivision_name'=>'Vestfirðir',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'IS-4'
] );


			
State::create( [
'state_subdivision_id'=>14664,
'country_code_char2'=>'IS',
'country_code_char3'=>'ISL',
'state_subdivision_name'=>'Norðurland vestra',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'IS-5'
] );


			
State::create( [
'state_subdivision_id'=>14666,
'country_code_char2'=>'IS',
'country_code_char3'=>'ISL',
'state_subdivision_name'=>'Höfuðborgarsvæði utan Reykjavíkur',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'IS-1'
] );


			
State::create( [
'state_subdivision_id'=>14667,
'country_code_char2'=>'IS',
'country_code_char3'=>'ISL',
'state_subdivision_name'=>'Suðurnes',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'IS-2'
] );


			
State::create( [
'state_subdivision_id'=>14668,
'country_code_char2'=>'IS',
'country_code_char3'=>'ISL',
'state_subdivision_name'=>'Suðurland',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'IS-8'
] );


			
State::create( [
'state_subdivision_id'=>14669,
'country_code_char2'=>'IS',
'country_code_char3'=>'ISL',
'state_subdivision_name'=>'Norðurland eystra',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'IS-6'
] );


			
State::create( [
'state_subdivision_id'=>14670,
'country_code_char2'=>'IS',
'country_code_char3'=>'ISL',
'state_subdivision_name'=>'Austurland',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Region',
'state_subdivision_code'=>'IS-7'
] );


			
State::create( [
'state_subdivision_id'=>14671,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Uttaranchal',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'IN-UL'
] );


			
State::create( [
'state_subdivision_id'=>14672,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Himachal Pradesh',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'IN-HP'
] );


			
State::create( [
'state_subdivision_id'=>14673,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Andaman and Nicobar Islands',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'union territory',
'state_subdivision_code'=>'IN-AN'
] );


			
State::create( [
'state_subdivision_id'=>14674,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Arunachal Pradesh',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'IN-AR'
] );


			
State::create( [
'state_subdivision_id'=>14675,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Assam',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'IN-AS'
] );


			
State::create( [
'state_subdivision_id'=>14676,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Bihar',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'IN-BR'
] );


			
State::create( [
'state_subdivision_id'=>14677,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Chhattisgarh',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'IN-CT'
] );


			
State::create( [
'state_subdivision_id'=>14678,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Dadra and Nagar Haveli',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'union territory',
'state_subdivision_code'=>'IN-DN'
] );


			
State::create( [
'state_subdivision_id'=>14679,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Delhi',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'union territory',
'state_subdivision_code'=>'IN-DL'
] );


			
State::create( [
'state_subdivision_id'=>14680,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Gujarat',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'IN-GJ'
] );


			
State::create( [
'state_subdivision_id'=>14681,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Haryana',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'IN-HR'
] );


			
State::create( [
'state_subdivision_id'=>14682,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Jammu and Kashmir',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'IN-JK'
] );


			
State::create( [
'state_subdivision_id'=>14683,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Karnataka',
'state_subdivision_alternate_names'=>'Kanara',
'primary_level_name'=>'state',
'state_subdivision_code'=>'IN-KA'
] );


			
State::create( [
'state_subdivision_id'=>14684,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Kerala',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'IN-KL'
] );


			
State::create( [
'state_subdivision_id'=>14685,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Madhya Pradesh',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'IN-MP'
] );


			
State::create( [
'state_subdivision_id'=>14686,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Maharashtra',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'IN-MH'
] );


			
State::create( [
'state_subdivision_id'=>14687,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Meghalaya',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'IN-ML'
] );


			
State::create( [
'state_subdivision_id'=>14688,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Nagaland',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'IN-NL'
] );


			
State::create( [
'state_subdivision_id'=>14689,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Orissa',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'IN-OR'
] );


			
State::create( [
'state_subdivision_id'=>14690,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Punjab',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'IN-PB'
] );


			
State::create( [
'state_subdivision_id'=>14691,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Rajasthan',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'IN-RJ'
] );


			
State::create( [
'state_subdivision_id'=>14692,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Tamil Nadu',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'IN-TN'
] );

State::create( [
'state_subdivision_id'=>14693,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Tripura',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'IN-TR'
] );


			
State::create( [
'state_subdivision_id'=>14694,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Uttar Pradesh',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'IN-UP'
] );


			
State::create( [
'state_subdivision_id'=>14695,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Andhra Pradesh',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'IN-AP'
] );


			
State::create( [
'state_subdivision_id'=>14696,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'West Bengal',
'state_subdivision_alternate_names'=>'West Bengal',
'primary_level_name'=>'state',
'state_subdivision_code'=>'IN-WB'
] );


			
State::create( [
'state_subdivision_id'=>14697,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Chandigarh',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'union territory',
'state_subdivision_code'=>'IN-CH'
] );


			
State::create( [
'state_subdivision_id'=>14698,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Daman and Diu',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'union territory',
'state_subdivision_code'=>'IN-DD'
] );


			
State::create( [
'state_subdivision_id'=>14699,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Goa',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'IN-GA'
] );


			
State::create( [
'state_subdivision_id'=>14700,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Jharkhand',
'state_subdivision_alternate_names'=>'Vananchal',
'primary_level_name'=>'state',
'state_subdivision_code'=>'IN-JH'
] );


			
State::create( [
'state_subdivision_id'=>14701,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Sikkim',
'state_subdivision_alternate_names'=>'Denjong',
'primary_level_name'=>'state',
'state_subdivision_code'=>'IN-SK'
] );


			
State::create( [
'state_subdivision_id'=>14702,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Mizoram',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'IN-MZ'
] );


			
State::create( [
'state_subdivision_id'=>14703,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Manipur',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'state',
'state_subdivision_code'=>'IN-MN'
] );


			
State::create( [
'state_subdivision_id'=>14704,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Lakshadweep',
'state_subdivision_alternate_names'=>'Laccadive, Lakkadiven',
'primary_level_name'=>'union territory',
'state_subdivision_code'=>'IN-LD'
] );


			
State::create( [
'state_subdivision_id'=>14705,
'country_code_char2'=>'IN',
'country_code_char3'=>'IND',
'state_subdivision_name'=>'Pondicherry',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'union territory',
'state_subdivision_code'=>'IN-PY'
] );


			
State::create( [
'state_subdivision_id'=>14706,
'country_code_char2'=>'ID',
'country_code_char3'=>'IDN',
'state_subdivision_name'=>'Sumatera Utara',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'ID-SU'
] );


			
State::create( [
'state_subdivision_id'=>14707,
'country_code_char2'=>'ID',
'country_code_char3'=>'IDN',
'state_subdivision_name'=>'Sulawesi Selatan',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'ID-SN'
] );


			
State::create( [
'state_subdivision_id'=>14708,
'country_code_char2'=>'ID',
'country_code_char3'=>'IDN',
'state_subdivision_name'=>'Riau',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'ID-RI'
] );


			
State::create( [
'state_subdivision_id'=>14709,
'country_code_char2'=>'ID',
'country_code_char3'=>'IDN',
'state_subdivision_name'=>'Nusa Tenggara Timur',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'ID-NT'
] );


			
State::create( [
'state_subdivision_id'=>14710,
'country_code_char2'=>'ID',
'country_code_char3'=>'IDN',
'state_subdivision_name'=>'Maluku Utara',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'ID-MU'
] );


			
State::create( [
'state_subdivision_id'=>14711,
'country_code_char2'=>'ID',
'country_code_char3'=>'IDN',
'state_subdivision_name'=>'Gorontalo',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'ID-GO'
] );


			
State::create( [
'state_subdivision_id'=>14712,
'country_code_char2'=>'ID',
'country_code_char3'=>'IDN',
'state_subdivision_name'=>'Jambi',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'ID-JA'
] );


			
State::create( [
'state_subdivision_id'=>14713,
'country_code_char2'=>'ID',
'country_code_char3'=>'IDN',
'state_subdivision_name'=>'Jawa Tengah',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'ID-JT'
] );


			
State::create( [
'state_subdivision_id'=>14714,
'country_code_char2'=>'ID',
'country_code_char3'=>'IDN',
'state_subdivision_name'=>'Kalimantan Barat',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'ID-KB'
] );


			
State::create( [
'state_subdivision_id'=>14715,
'country_code_char2'=>'ID',
'country_code_char3'=>'IDN',
'state_subdivision_name'=>'Kalimantan Selatan',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'ID-KS'
] );


			
State::create( [
'state_subdivision_id'=>14716,
'country_code_char2'=>'ID',
'country_code_char3'=>'IDN',
'state_subdivision_name'=>'Sulawesi Utara',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'ID-SA'
] );


			
State::create( [
'state_subdivision_id'=>14717,
'country_code_char2'=>'ID',
'country_code_char3'=>'IDN',
'state_subdivision_name'=>'Sumatera Selatan',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'ID-SS'
] );


			
State::create( [
'state_subdivision_id'=>14718,
'country_code_char2'=>'ID',
'country_code_char3'=>'IDN',
'state_subdivision_name'=>'Yogyakarta',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'special region',
'state_subdivision_code'=>'ID-YO'
] );


			
State::create( [
'state_subdivision_id'=>14719,
'country_code_char2'=>'ID',
'country_code_char3'=>'IDN',
'state_subdivision_name'=>'Bali',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'ID-BA'
] );


			
State::create( [
'state_subdivision_id'=>14720,
'country_code_char2'=>'ID',
'country_code_char3'=>'IDN',
'state_subdivision_name'=>'Aceh',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'autonomous province',
'state_subdivision_code'=>'ID-AC'
] );


			
State::create( [
'state_subdivision_id'=>14721,
'country_code_char2'=>'ID',
'country_code_char3'=>'IDN',
'state_subdivision_name'=>'Bangka Belitung',
'state_subdivision_alternate_names'=>'Kepulauan Bangka-Belitung',
'primary_level_name'=>'province',
'state_subdivision_code'=>'ID-BB'
] );


			
State::create( [
'state_subdivision_id'=>14722,
'country_code_char2'=>'ID',
'country_code_char3'=>'IDN',
'state_subdivision_name'=>'Bengkulu',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'ID-BE'
] );


			
State::create( [
'state_subdivision_id'=>14723,
'country_code_char2'=>'ID',
'country_code_char3'=>'IDN',
'state_subdivision_name'=>'Banten',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'ID-BT'
] );


			
State::create( [
'state_subdivision_id'=>14724,
'country_code_char2'=>'ID',
'country_code_char3'=>'IDN',
'state_subdivision_name'=>'Jakarta Raya',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'special district',
'state_subdivision_code'=>'ID-JK'
] );


			
State::create( [
'state_subdivision_id'=>14725,
'country_code_char2'=>'ID',
'country_code_char3'=>'IDN',
'state_subdivision_name'=>'Jawa Barat',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'ID-JB'
] );


			
State::create( [
'state_subdivision_id'=>14726,
'country_code_char2'=>'ID',
'country_code_char3'=>'IDN',
'state_subdivision_name'=>'Jawa Timur',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'ID-JI'
] );


			
State::create( [
'state_subdivision_id'=>14727,
'country_code_char2'=>'ID',
'country_code_char3'=>'IDN',
'state_subdivision_name'=>'Kalimantan Tengah',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'ID-KT'
] );


			
State::create( [
'state_subdivision_id'=>14728,
'country_code_char2'=>'ID',
'country_code_char3'=>'IDN',
'state_subdivision_name'=>'Kalimantan Timur',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'ID-KI'
] );


			
State::create( [
'state_subdivision_id'=>14729,
'country_code_char2'=>'ID',
'country_code_char3'=>'IDN',
'state_subdivision_name'=>'Lampung',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'ID-LA'
] );


			
State::create( [
'state_subdivision_id'=>14730,
'country_code_char2'=>'ID',
'country_code_char3'=>'IDN',
'state_subdivision_name'=>'Maluku',
'state_subdivision_alternate_names'=>'Gewürzinseln, Moluccas, Molukken, Spice Islands',
'primary_level_name'=>'province',
'state_subdivision_code'=>'ID-MA'
] );


			
State::create( [
'state_subdivision_id'=>14731,
'country_code_char2'=>'ID',
'country_code_char3'=>'IDN',
'state_subdivision_name'=>'Nusa Tenggara Barat',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'ID-NB'
] );


			
State::create( [
'state_subdivision_id'=>14732,
'country_code_char2'=>'ID',
'country_code_char3'=>'IDN',
'state_subdivision_name'=>'Papua',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'ID-PA'
] );


			
State::create( [
'state_subdivision_id'=>14733,
'country_code_char2'=>'ID',
'country_code_char3'=>'IDN',
'state_subdivision_name'=>'Kepulauan Riau',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'ID-KR'
] );


			
State::create( [
'state_subdivision_id'=>14734,
'country_code_char2'=>'ID',
'country_code_char3'=>'IDN',
'state_subdivision_name'=>'Sulawesi Tengah',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'ID-ST'
] );


			
State::create( [
'state_subdivision_id'=>14735,
'country_code_char2'=>'ID',
'country_code_char3'=>'IDN',
'state_subdivision_name'=>'Sumatera Barat',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'ID-SB'
] );


			
State::create( [
'state_subdivision_id'=>14736,
'country_code_char2'=>'ID',
'country_code_char3'=>'IDN',
'state_subdivision_name'=>'Sulawesi Tenggara',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'province',
'state_subdivision_code'=>'ID-SG'
] );


			
State::create( [
'state_subdivision_id'=>14737,
'country_code_char2'=>'IR',
'country_code_char3'=>'IRN',
'state_subdivision_name'=>'Zanjan',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IR-11'
] );


			
State::create( [
'state_subdivision_id'=>14738,
'country_code_char2'=>'IR',
'country_code_char3'=>'IRN',
'state_subdivision_name'=>'Qom',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IR-26'
] );


			
State::create( [
'state_subdivision_id'=>14739,
'country_code_char2'=>'IR',
'country_code_char3'=>'IRN',
'state_subdivision_name'=>'Kermanshah',
'state_subdivision_alternate_names'=>'Bakhtaran',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IR-17'
] );


			
State::create( [
'state_subdivision_id'=>14740,
'country_code_char2'=>'IR',
'country_code_char3'=>'IRN',
'state_subdivision_name'=>'Khorasan',
'state_subdivision_alternate_names'=>'Khorasan',
'primary_level_name'=>'',
'state_subdivision_code'=>'IR-09'
] );


			
State::create( [
'state_subdivision_id'=>14741,
'country_code_char2'=>'IR',
'country_code_char3'=>'IRN',
'state_subdivision_name'=>'Khuzestan',
'state_subdivision_alternate_names'=>'Arabistan',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IR-10'
] );


			
State::create( [
'state_subdivision_id'=>14742,
'country_code_char2'=>'IR',
'country_code_char3'=>'IRN',
'state_subdivision_name'=>'Kohkiluyeh va Buyer Ahmad',
'state_subdivision_alternate_names'=>'Boyer Ahmad-e Kohkiluyeh, Kohkilouyeh',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IR-18'
] );


			
State::create( [
'state_subdivision_id'=>14743,
'country_code_char2'=>'IR',
'country_code_char3'=>'IRN',
'state_subdivision_name'=>'Kordestan',
'state_subdivision_alternate_names'=>'Kurdestan, Kurdistan',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IR-16'
] );


			
State::create( [
'state_subdivision_id'=>14744,
'country_code_char2'=>'IR',
'country_code_char3'=>'IRN',
'state_subdivision_name'=>'Lorestan',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IR-20'
] );


			
State::create( [
'state_subdivision_id'=>14745,
'country_code_char2'=>'IR',
'country_code_char3'=>'IRN',
'state_subdivision_name'=>'Markazi',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IR-22'
] );


			
State::create( [
'state_subdivision_id'=>14746,
'country_code_char2'=>'IR',
'country_code_char3'=>'IRN',
'state_subdivision_name'=>'Mazandaran',
'state_subdivision_alternate_names'=>'Mazandaran',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IR-21'
] );


			
State::create( [
'state_subdivision_id'=>14747,
'country_code_char2'=>'IR',
'country_code_char3'=>'IRN',
'state_subdivision_name'=>'Qazvin',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IR-28'
] );


			
State::create( [
'state_subdivision_id'=>14748,
'country_code_char2'=>'IR',
'country_code_char3'=>'IRN',
'state_subdivision_name'=>'Ardabil',
'state_subdivision_alternate_names'=>'Ardabil, Ardebil',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IR-03'
] );


			
State::create( [
'state_subdivision_id'=>14749,
'country_code_char2'=>'IR',
'country_code_char3'=>'IRN',
'state_subdivision_name'=>'Az¯arbayjan-e Sharqi',
'state_subdivision_alternate_names'=>'Azarbayjān-e Khavari, East Azerbaijan',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IR-01'
] );


			
State::create( [
'state_subdivision_id'=>14750,
'country_code_char2'=>'IR',
'country_code_char3'=>'IRN',
'state_subdivision_name'=>'Chahar Mah¸all va Bakhtiari',
'state_subdivision_alternate_names'=>'Chaharmahal Bakhtiari',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IR-08'
] );


			
State::create( [
'state_subdivision_id'=>14751,
'country_code_char2'=>'IR',
'country_code_char3'=>'IRN',
'state_subdivision_name'=>'Fars',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IR-14'
] );


			
State::create( [
'state_subdivision_id'=>14752,
'country_code_char2'=>'IR',
'country_code_char3'=>'IRN',
'state_subdivision_name'=>'Hamadan',
'state_subdivision_alternate_names'=>'Hamedan',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IR-24'
] );


			
State::create( [
'state_subdivision_id'=>14753,
'country_code_char2'=>'IR',
'country_code_char3'=>'IRN',
'state_subdivision_name'=>'Ilam',
'state_subdivision_alternate_names'=>'Ilam',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IR-05'
] );


			
State::create( [
'state_subdivision_id'=>14754,
'country_code_char2'=>'IR',
'country_code_char3'=>'IRN',
'state_subdivision_name'=>'Semnan',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IR-12'
] );


			
State::create( [
'state_subdivision_id'=>14755,
'country_code_char2'=>'IR',
'country_code_char3'=>'IRN',
'state_subdivision_name'=>'Tehran',
'state_subdivision_alternate_names'=>'Teheran',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IR-07'
] );


			
State::create( [
'state_subdivision_id'=>14756,
'country_code_char2'=>'IR',
'country_code_char3'=>'IRN',
'state_subdivision_name'=>'Az¯arbayjan-e Gharbi',
'state_subdivision_alternate_names'=>'Azarbayjān-e Bakhtari, West Azerbaijan',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IR-02'
] );


			
State::create( [
'state_subdivision_id'=>14757,
'country_code_char2'=>'IR',
'country_code_char3'=>'IRN',
'state_subdivision_name'=>'Bushehr',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IR-06'
] );


			
State::create( [
'state_subdivision_id'=>14758,
'country_code_char2'=>'IR',
'country_code_char3'=>'IRN',
'state_subdivision_name'=>'Esfahan',
'state_subdivision_alternate_names'=>'Isfahan',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IR-04'
] );


			
State::create( [
'state_subdivision_id'=>14759,
'country_code_char2'=>'IR',
'country_code_char3'=>'IRN',
'state_subdivision_name'=>'Gilan',
'state_subdivision_alternate_names'=>'Gilan',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IR-19'
] );


			
State::create( [
'state_subdivision_id'=>14760,
'country_code_char2'=>'IR',
'country_code_char3'=>'IRN',
'state_subdivision_name'=>'Golestan',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IR-27'
] );


			
State::create( [
'state_subdivision_id'=>14761,
'country_code_char2'=>'IR',
'country_code_char3'=>'IRN',
'state_subdivision_name'=>'Hormozgan',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IR-23'
] );


			
State::create( [
'state_subdivision_id'=>14762,
'country_code_char2'=>'IR',
'country_code_char3'=>'IRN',
'state_subdivision_name'=>'Kerman',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IR-15'
] );


			
State::create( [
'state_subdivision_id'=>14763,
'country_code_char2'=>'IR',
'country_code_char3'=>'IRN',
'state_subdivision_name'=>'Yazd',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IR-25'
] );


			
State::create( [
'state_subdivision_id'=>14764,
'country_code_char2'=>'IR',
'country_code_char3'=>'IRN',
'state_subdivision_name'=>'Sistan va Baluchestan',
'state_subdivision_alternate_names'=>'Sistan-e Baluchistan',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IR-13'
] );


			
State::create( [
'state_subdivision_id'=>14765,
'country_code_char2'=>'IQ',
'country_code_char3'=>'IRQ',
'state_subdivision_name'=>'At Tamim',
'state_subdivision_alternate_names'=>'at-Tamim',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IQ-TS',
] );


			
State::create( [
'state_subdivision_id'=>14766,
'country_code_char2'=>'IQ',
'country_code_char3'=>'IRQ',
'state_subdivision_name'=>'Al Qadisiyah',
'state_subdivision_alternate_names'=>'al-Qadisiyah',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IQ-QA'
] );


			
State::create( [
'state_subdivision_id'=>14767,
'country_code_char2'=>'IQ',
'country_code_char3'=>'IRQ',
'state_subdivision_name'=>'Salah ad Din',
'state_subdivision_alternate_names'=>'Salah-ad-Din',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IQ-SD'
] );


			
State::create( [
'state_subdivision_id'=>14768,
'country_code_char2'=>'IQ',
'country_code_char3'=>'IRQ',
'state_subdivision_name'=>'An Najaf',
'state_subdivision_alternate_names'=>'Najaf, Nedjef, Nejef',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IQ-NA'
] );


			
State::create( [
'state_subdivision_id'=>14769,
'country_code_char2'=>'IQ',
'country_code_char3'=>'IRQ',
'state_subdivision_name'=>'Arbil',
'state_subdivision_alternate_names'=>'Arbil, Erbil, Irbil',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IQ-AR'
] );


			
State::create( [
'state_subdivision_id'=>14770,
'country_code_char2'=>'IQ',
'country_code_char3'=>'IRQ',
'state_subdivision_name'=>'Baghdad',
'state_subdivision_alternate_names'=>'Baġdād, Bagdad, Bagdad',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IQ-BG'
] );


			
State::create( [
'state_subdivision_id'=>14771,
'country_code_char2'=>'IQ',
'country_code_char3'=>'IRQ',
'state_subdivision_name'=>'Al Anbar',
'state_subdivision_alternate_names'=>'al-Anbar',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IQ-AN'
] );


			
State::create( [
'state_subdivision_id'=>14772,
'country_code_char2'=>'IQ',
'country_code_char3'=>'IRQ',
'state_subdivision_name'=>'Babil',
'state_subdivision_alternate_names'=>'Babil, Babylon',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IQ-BB'
] );


			
State::create( [
'state_subdivision_id'=>14773,
'country_code_char2'=>'IQ',
'country_code_char3'=>'IRQ',
'state_subdivision_name'=>'Al Basrah',
'state_subdivision_alternate_names'=>'Basra, Bassora, al-Basrah',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IQ-BA'
] );


			
State::create( [
'state_subdivision_id'=>14774,
'country_code_char2'=>'IQ',
'country_code_char3'=>'IRQ',
'state_subdivision_name'=>'Dahuk',
'state_subdivision_alternate_names'=>'Dahuk',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IQ-DA'
] );


			
State::create( [
'state_subdivision_id'=>14775,
'country_code_char2'=>'IQ',
'country_code_char3'=>'IRQ',
'state_subdivision_name'=>'Diyalá',
'state_subdivision_alternate_names'=>'Diyala',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IQ-DI'
] );


			
State::create( [
'state_subdivision_id'=>14776,
'country_code_char2'=>'IQ',
'country_code_char3'=>'IRQ',
'state_subdivision_name'=>'Karbala',
'state_subdivision_alternate_names'=>'Karbala, Kerbala, Kerbela',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IQ-KA',
] );


			
State::create( [
'state_subdivision_id'=>14777,
'country_code_char2'=>'IQ',
'country_code_char3'=>'IRQ',
'state_subdivision_name'=>'Al Muthanná',
'state_subdivision_alternate_names'=>'al-Muthanna',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IQ-MU'
] );


			
State::create( [
'state_subdivision_id'=>14778,
'country_code_char2'=>'IQ',
'country_code_char3'=>'IRQ',
'state_subdivision_name'=>'Ninawá',
'state_subdivision_alternate_names'=>'Nineveh, Niniveh',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IQ-NI'
] );


			
State::create( [
'state_subdivision_id'=>14779,
'country_code_char2'=>'IQ',
'country_code_char3'=>'IRQ',
'state_subdivision_name'=>'As Sulaymaniyah',
'state_subdivision_alternate_names'=>'Sulaymaniya, Sulaymānīyah, as-Sulaymaniyah',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IQ-SU'
] );


			
State::create( [
'state_subdivision_id'=>14780,
'country_code_char2'=>'IQ',
'country_code_char3'=>'IRQ',
'state_subdivision_name'=>'Wasit',
'state_subdivision_alternate_names'=>'Wasit',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IQ-WA'
] );


			
State::create( [
'state_subdivision_id'=>14781,
'country_code_char2'=>'IQ',
'country_code_char3'=>'IRQ',
'state_subdivision_name'=>'Dhi Qar',
'state_subdivision_alternate_names'=>'Dhi Qar, Thi Qar',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IQ-DQ'
] );


			
State::create( [
'state_subdivision_id'=>14782,
'country_code_char2'=>'IQ',
'country_code_char3'=>'IRQ',
'state_subdivision_name'=>'Maysan',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Province',
'state_subdivision_code'=>'IQ-MA'
] );


			
State::create( [
'state_subdivision_id'=>14783,
'country_code_char2'=>'IE',
'country_code_char3'=>'IRL',
'state_subdivision_name'=>'Wexford',
'state_subdivision_alternate_names'=>'Loch Garman',
'primary_level_name'=>'County',
'state_subdivision_code'=>'IE-WX'
] );


			
State::create( [
'state_subdivision_id'=>14784,
'country_code_char2'=>'IE',
'country_code_char3'=>'IRL',
'state_subdivision_name'=>'Waterford',
'state_subdivision_alternate_names'=>'Port Láirge',
'primary_level_name'=>'County',
'state_subdivision_code'=>'IE-WD'
] );


			
State::create( [
'state_subdivision_id'=>14786,
'country_code_char2'=>'IE',
'country_code_char3'=>'IRL',
'state_subdivision_name'=>'Monaghan',
'state_subdivision_alternate_names'=>'Muineachán',
'primary_level_name'=>'County',
'state_subdivision_code'=>'IE-MN'
] );


			
State::create( [
'state_subdivision_id'=>14787,
'country_code_char2'=>'IE',
'country_code_char3'=>'IRL',
'state_subdivision_name'=>'Longford',
'state_subdivision_alternate_names'=>'Longphort, Longphuirt',
'primary_level_name'=>'County',
'state_subdivision_code'=>'IE-LD'
] );


			
State::create( [
'state_subdivision_id'=>14788,
'country_code_char2'=>'IE',
'country_code_char3'=>'IRL',
'state_subdivision_name'=>'Kildare',
'state_subdivision_alternate_names'=>'Cill Dara',
'primary_level_name'=>'County',
'state_subdivision_code'=>'IE-KE'
] );


			
State::create( [
'state_subdivision_id'=>14789,
'country_code_char2'=>'IE',
'country_code_char3'=>'IRL',
'state_subdivision_name'=>'Meath',
'state_subdivision_alternate_names'=>'An Mhí, An Mhídhe',
'primary_level_name'=>'County',
'state_subdivision_code'=>'IE-MH'
] );


			
State::create( [
'state_subdivision_id'=>14790,
'country_code_char2'=>'IE',
'country_code_char3'=>'IRL',
'state_subdivision_name'=>'Offaly',
'state_subdivision_alternate_names'=>'Kingʿs, Kingʿs County, Ua Uíbh Fhailí, Uí Fáilghe',
'primary_level_name'=>'County',
'state_subdivision_code'=>'IE-OY'
] );


			
State::create( [
'state_subdivision_id'=>14791,
'country_code_char2'=>'IE',
'country_code_char3'=>'IRL',
'state_subdivision_name'=>'Sligo',
'state_subdivision_alternate_names'=>'Sligeach',
'primary_level_name'=>'County',
'state_subdivision_code'=>'IE-SO'
] );


			
State::create( [
'state_subdivision_id'=>14792,
'country_code_char2'=>'IE',
'country_code_char3'=>'IRL',
'state_subdivision_name'=>'Tipperary',
'state_subdivision_alternate_names'=>'Tiobraid Árann',
'primary_level_name'=>'County',
'state_subdivision_code'=>'IE-TA'
] );


			
State::create( [
'state_subdivision_id'=>14793,
'country_code_char2'=>'IE',
'country_code_char3'=>'IRL',
'state_subdivision_name'=>'Westmeath',
'state_subdivision_alternate_names'=>'An Iarmhidhe',
'primary_level_name'=>'County',
'state_subdivision_code'=>'IE-WH'
] );


			
State::create( [
'state_subdivision_id'=>14794,
'country_code_char2'=>'IE',
'country_code_char3'=>'IRL',
'state_subdivision_name'=>'Wicklow',
'state_subdivision_alternate_names'=>'Cill Maintain, Cill Mhanntáin',
'primary_level_name'=>'County',
'state_subdivision_code'=>'IE-WW'
] );


			
State::create( [
'state_subdivision_id'=>14795,
'country_code_char2'=>'IE',
'country_code_char3'=>'IRL',
'state_subdivision_name'=>'Cavan',
'state_subdivision_alternate_names'=>'An Cabhán',
'primary_level_name'=>'County',
'state_subdivision_code'=>'IE-CN'
] );


			
State::create( [
'state_subdivision_id'=>14796,
'country_code_char2'=>'IE',
'country_code_char3'=>'IRL',
'state_subdivision_name'=>'Donegal',
'state_subdivision_alternate_names'=>'Dún na nGall',
'primary_level_name'=>'County',
'state_subdivision_code'=>'IE-DL'
] );


			
State::create( [
'state_subdivision_id'=>14797,
'country_code_char2'=>'IE',
'country_code_char3'=>'IRL',
'state_subdivision_name'=>'Galway',
'state_subdivision_alternate_names'=>'Gaillimh',
'primary_level_name'=>'County',
'state_subdivision_code'=>'IE-G'
] );


			
State::create( [
'state_subdivision_id'=>14798,
'country_code_char2'=>'IE',
'country_code_char3'=>'IRL',
'state_subdivision_name'=>'Carlow',
'state_subdivision_alternate_names'=>'Ceatharlach',
'primary_level_name'=>'County',
'state_subdivision_code'=>'IE-CW'
] );


			
State::create( [
'state_subdivision_id'=>14799,
'country_code_char2'=>'IE',
'country_code_char3'=>'IRL',
'state_subdivision_name'=>'Clare',
'state_subdivision_alternate_names'=>'An Clár',
'primary_level_name'=>'County',
'state_subdivision_code'=>'IE-CE'
] );


			
State::create( [
'state_subdivision_id'=>14800,
'country_code_char2'=>'IE',
'country_code_char3'=>'IRL',
'state_subdivision_name'=>'Cork',
'state_subdivision_alternate_names'=>'Corcaigh',
'primary_level_name'=>'County',
'state_subdivision_code'=>'IE-C'
] );


			
State::create( [
'state_subdivision_id'=>14801,
'country_code_char2'=>'IE',
'country_code_char3'=>'IRL',
'state_subdivision_name'=>'Dublin',
'state_subdivision_alternate_names'=>'Átha Cliath',
'primary_level_name'=>'County',
'state_subdivision_code'=>'IE-D'
] );


			
State::create( [
'state_subdivision_id'=>14802,
'country_code_char2'=>'IE',
'country_code_char3'=>'IRL',
'state_subdivision_name'=>'Kerry',
'state_subdivision_alternate_names'=>'Ciarraighe, Ciarraí',
'primary_level_name'=>'County',
'state_subdivision_code'=>'IE-KY'
] );


			
State::create( [
'state_subdivision_id'=>14803,
'country_code_char2'=>'IE',
'country_code_char3'=>'IRL',
'state_subdivision_name'=>'Kilkenny',
'state_subdivision_alternate_names'=>'Cill Chainnigh',
'primary_level_name'=>'County',
'state_subdivision_code'=>'IE-KK'
] );


			
State::create( [
'state_subdivision_id'=>14804,
'country_code_char2'=>'IE',
'country_code_char3'=>'IRL',
'state_subdivision_name'=>'Leitrim',
'state_subdivision_alternate_names'=>'Liathdroim',
'primary_level_name'=>'County',
'state_subdivision_code'=>'IE-LM'
] );


			
State::create( [
'state_subdivision_id'=>14805,
'country_code_char2'=>'IE',
'country_code_char3'=>'IRL',
'state_subdivision_name'=>'Limerick',
'state_subdivision_alternate_names'=>'Luimneach',
'primary_level_name'=>'County',
'state_subdivision_code'=>'IE-LK'
] );


			
State::create( [
'state_subdivision_id'=>14806,
'country_code_char2'=>'IE',
'country_code_char3'=>'IRL',
'state_subdivision_name'=>'Louth',
'state_subdivision_alternate_names'=>'Lughbhadh, Lú',
'primary_level_name'=>'County',
'state_subdivision_code'=>'IE-LH'
] );


			
State::create( [
'state_subdivision_id'=>14807,
'country_code_char2'=>'IE',
'country_code_char3'=>'IRL',
'state_subdivision_name'=>'Laois',
'state_subdivision_alternate_names'=>'Laoighis, Queenʿs',
'primary_level_name'=>'County',
'state_subdivision_code'=>'IE-LS'
] );


			
State::create( [
'state_subdivision_id'=>14808,
'country_code_char2'=>'IE',
'country_code_char3'=>'IRL',
'state_subdivision_name'=>'Mayo',
'state_subdivision_alternate_names'=>'Maigh Eo',
'primary_level_name'=>'County',
'state_subdivision_code'=>'IE-MO'
] );


			
State::create( [
'state_subdivision_id'=>14809,
'country_code_char2'=>'IE',
'country_code_char3'=>'IRL',
'state_subdivision_name'=>'Roscommon',
'state_subdivision_alternate_names'=>'Ros Comáin',
'primary_level_name'=>'County',
'state_subdivision_code'=>'IE-RN'
] );


			
State::create( [
'state_subdivision_id'=>14847,
'country_code_char2'=>'IL',
'country_code_char3'=>'ISR',
'state_subdivision_name'=>'HaDarom',
'state_subdivision_alternate_names'=>'Southern',
'primary_level_name'=>'District',
'state_subdivision_code'=>'IL-D'
] );


			
State::create( [
'state_subdivision_id'=>14848,
'country_code_char2'=>'IL',
'country_code_char3'=>'ISR',
'state_subdivision_name'=>'HaZafon',
'state_subdivision_alternate_names'=>'Northern',
'primary_level_name'=>'District',
'state_subdivision_code'=>'IL-Z'
] );


			
State::create( [
'state_subdivision_id'=>14850,
'country_code_char2'=>'IL',
'country_code_char3'=>'ISR',
'state_subdivision_name'=>'Tel-Aviv',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'District',
'state_subdivision_code'=>'IL-TA'
] );


			
State::create( [
'state_subdivision_id'=>14877,
'country_code_char2'=>'IL',
'country_code_char3'=>'ISR',
'state_subdivision_name'=>'HaMerkaz',
'state_subdivision_alternate_names'=>'Central',
'primary_level_name'=>'District',
'state_subdivision_code'=>'IL-M'
] );


			
State::create( [
'state_subdivision_id'=>14878,
'country_code_char2'=>'IL',
'country_code_char3'=>'ISR',
'state_subdivision_name'=>'Haifa',
'state_subdivision_alternate_names'=>'Hefa, H̱efa, Haifa, Haifa, Haifa',
'primary_level_name'=>'District',
'state_subdivision_code'=>'IL-HA'
] );


			
State::create( [
'state_subdivision_id'=>14879,
'country_code_char2'=>'IL',
'country_code_char3'=>'ISR',
'state_subdivision_name'=>'Yerushalayim',
'state_subdivision_alternate_names'=>'al-Quds, Yerushalayim, Jerusalem, Jérusalem, Jerusalén',
'primary_level_name'=>'District',
'state_subdivision_code'=>'IL-JM'
] );


			
State::create( [
'state_subdivision_id'=>14882,
'country_code_char2'=>'IT',
'country_code_char3'=>'ITA',
'state_subdivision_name'=>'Valle d Aosta',
'state_subdivision_alternate_names'=>'Valle d Aosta',
'primary_level_name'=>'regione',
'state_subdivision_code'=>'IT-23',
] );


			
State::create( [
'state_subdivision_id'=>14883,
'country_code_char2'=>'IT',
'country_code_char3'=>'ITA',
'state_subdivision_name'=>'Sardegna',
'state_subdivision_alternate_names'=>'Sardigna, Sardinia, Sardinien, Sardaigne',
'primary_level_name'=>'region',
'state_subdivision_code'=>'IT-88'
] );


			
State::create( [
'state_subdivision_id'=>14884,
'country_code_char2'=>'IT',
'country_code_char3'=>'ITA',
'state_subdivision_name'=>'Molise',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'region',
'state_subdivision_code'=>'IT-67'
] );


			
State::create( [
'state_subdivision_id'=>14885,
'country_code_char2'=>'IT',
'country_code_char3'=>'ITA',
'state_subdivision_name'=>'Friuli-Venezia Giulia',
'state_subdivision_alternate_names'=>'Frioul-Vénétie Julienne',
'primary_level_name'=>'region',
'state_subdivision_code'=>'IT-36'
] );


			
State::create( [
'state_subdivision_id'=>14886,
'country_code_char2'=>'IT',
'country_code_char3'=>'ITA',
'state_subdivision_name'=>'Emilia-Romagna',
'state_subdivision_alternate_names'=>'Émilie-Romagne',
'primary_level_name'=>'region',
'state_subdivision_code'=>'IT-45'
] );


			
State::create( [
'state_subdivision_id'=>14887,
'country_code_char2'=>'IT',
'country_code_char3'=>'ITA',
'state_subdivision_name'=>'Lazio',
'state_subdivision_alternate_names'=>'Latium',
'primary_level_name'=>'region',
'state_subdivision_code'=>'IT-62'
] );


			
State::create( [
'state_subdivision_id'=>14888,
'country_code_char2'=>'IT',
'country_code_char3'=>'ITA',
'state_subdivision_name'=>'Lombardia',
'state_subdivision_alternate_names'=>'Lombardia, Lombardei, Lombardie',
'primary_level_name'=>'region',
'state_subdivision_code'=>'IT-25'
] );


			
State::create( [
'state_subdivision_id'=>14889,
'country_code_char2'=>'IT',
'country_code_char3'=>'ITA',
'state_subdivision_name'=>'Marche',
'state_subdivision_alternate_names'=>'Marches, Marken',
'primary_level_name'=>'region',
'state_subdivision_code'=>'IT-57'
] );


			
State::create( [
'state_subdivision_id'=>14890,
'country_code_char2'=>'IT',
'country_code_char3'=>'ITA',
'state_subdivision_name'=>'Puglia',
'state_subdivision_alternate_names'=>'Le Puglie, Puglia, Apulien, Pouilles',
'primary_level_name'=>'region',
'state_subdivision_code'=>'IT-75'
] );


			
State::create( [
'state_subdivision_id'=>14891,
'country_code_char2'=>'IT',
'country_code_char3'=>'ITA',
'state_subdivision_name'=>'Sicilia',
'state_subdivision_alternate_names'=>'Sicile, Sicilia, Sizilien, Sicilie',
'primary_level_name'=>'region',
'state_subdivision_code'=>'IT-82'
] );


			
State::create( [
'state_subdivision_id'=>14892,
'country_code_char2'=>'IT',
'country_code_char3'=>'ITA',
'state_subdivision_name'=>'Trentino-Alto Adige',
'state_subdivision_alternate_names'=>'Trentin-Haut Adige',
'primary_level_name'=>'region',
'state_subdivision_code'=>'IT-32'
] );


			
State::create( [
'state_subdivision_id'=>14893,
'country_code_char2'=>'IT',
'country_code_char3'=>'ITA',
'state_subdivision_name'=>'Umbria',
'state_subdivision_alternate_names'=>'Ombrie',
'primary_level_name'=>'region',
'state_subdivision_code'=>'IT-55'
] );


			
State::create( [
'state_subdivision_id'=>14894,
'country_code_char2'=>'IT',
'country_code_char3'=>'ITA',
'state_subdivision_name'=>'Veneto',
'state_subdivision_alternate_names'=>'Vénétie',
'primary_level_name'=>'region',
'state_subdivision_code'=>'IT-34'
] );


			
State::create( [
'state_subdivision_id'=>14895,
'country_code_char2'=>'IT',
'country_code_char3'=>'ITA',
'state_subdivision_name'=>'Abruzzo',
'state_subdivision_alternate_names'=>'Abruzzi, Abruzzo, Abruzzen',
'primary_level_name'=>'region',
'state_subdivision_code'=>'IT-65'
] );


			
State::create( [
'state_subdivision_id'=>14896,
'country_code_char2'=>'IT',
'country_code_char3'=>'ITA',
'state_subdivision_name'=>'Calabria',
'state_subdivision_alternate_names'=>'Calabre',
'primary_level_name'=>'region',
'state_subdivision_code'=>'IT-78'
] );


			
State::create( [
'state_subdivision_id'=>14897,
'country_code_char2'=>'IT',
'country_code_char3'=>'ITA',
'state_subdivision_name'=>'Basilicata',
'state_subdivision_alternate_names'=>'Basilicate',
'primary_level_name'=>'region',
'state_subdivision_code'=>'IT-77'
] );


			
State::create( [
'state_subdivision_id'=>14898,
'country_code_char2'=>'IT',
'country_code_char3'=>'ITA',
'state_subdivision_name'=>'Campania',
'state_subdivision_alternate_names'=>'Campanie',
'primary_level_name'=>'region',
'state_subdivision_code'=>'IT-72'
] );


			
State::create( [
'state_subdivision_id'=>14899,
'country_code_char2'=>'IT',
'country_code_char3'=>'ITA',
'state_subdivision_name'=>'Liguria',
'state_subdivision_alternate_names'=>'Ligurien, Ligurie',
'primary_level_name'=>'region',
'state_subdivision_code'=>'IT-42'
] );


			
State::create( [
'state_subdivision_id'=>14900,
'country_code_char2'=>'IT',
'country_code_char3'=>'ITA',
'state_subdivision_name'=>'Piemonte',
'state_subdivision_alternate_names'=>'Piémont',
'primary_level_name'=>'region',
'state_subdivision_code'=>'IT-21'
] );


			
State::create( [
'state_subdivision_id'=>14901,
'country_code_char2'=>'IT',
'country_code_char3'=>'ITA',
'state_subdivision_name'=>'Toscana',
'state_subdivision_alternate_names'=>'Toscane',
'primary_level_name'=>'region',
'state_subdivision_code'=>'IT-52'
] );


			
State::create( [
'state_subdivision_id'=>14902,
'country_code_char2'=>'JM',
'country_code_char3'=>'JAM',
'state_subdivision_name'=>'Saint Thomas',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'JM-03'
] );


			
State::create( [
'state_subdivision_id'=>14903,
'country_code_char2'=>'JM',
'country_code_char3'=>'JAM',
'state_subdivision_name'=>'Saint Elizabeth',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'JM-11'
] );


			
State::create( [
'state_subdivision_id'=>14904,
'country_code_char2'=>'JM',
'country_code_char3'=>'JAM',
'state_subdivision_name'=>'Saint Ann',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'JM-06'
] );


			
State::create( [
'state_subdivision_id'=>14905,
'country_code_char2'=>'JM',
'country_code_char3'=>'JAM',
'state_subdivision_name'=>'Clarendon',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'JM-13'
] );


			
State::create( [
'state_subdivision_id'=>14906,
'country_code_char2'=>'JM',
'country_code_char3'=>'JAM',
'state_subdivision_name'=>'Kingston',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'JM-01'
] );


			
State::create( [
'state_subdivision_id'=>14907,
'country_code_char2'=>'JM',
'country_code_char3'=>'JAM',
'state_subdivision_name'=>'Portland',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'JM-04'
] );


			
State::create( [
'state_subdivision_id'=>14908,
'country_code_char2'=>'JM',
'country_code_char3'=>'JAM',
'state_subdivision_name'=>'Saint Andrew',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'JM-02'
] );


			
State::create( [
'state_subdivision_id'=>14909,
'country_code_char2'=>'JM',
'country_code_char3'=>'JAM',
'state_subdivision_name'=>'Saint Catherine',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'JM-14'
] );


			
State::create( [
'state_subdivision_id'=>14910,
'country_code_char2'=>'JM',
'country_code_char3'=>'JAM',
'state_subdivision_name'=>'Saint James',
'state_subdivision_alternate_names'=>'',
'primary_level_name'=>'Parish',
'state_subdivision_code'=>'JM-08'
] );


			


   }
}