<?php

if (! function_exists('linkToApp')){
    function linkToApp($uri)
    {
        if (ENVIRONMENT == 'production'){
            return "https://app.eventmercubuana.com/" . $uri;
        }else{
            return "https://localhost:3002/" . $uri;
        }
    }
}

if (! function_exists('slug')){
    function slug($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\\pL\d]+~u', '-', $text);

        // trim
        $text = trim($text, '-');

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // lowercase
        $text = strtolower($text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        if (empty($text))
        {
            return 'n-a';
        }

        return $text;
    }
}

if (! function_exists('current_timestamp')){
    function current_timestamp() {
        return date('Y-m-d H:i:s');
    }
}

if (! function_exists('GetArrayDay')){
    function GetArrayDay() {
        $ArrayDay = array();
        for ($i = 1; $i <= 31; $i++) {
            $Day = str_pad($i, 2, "0", STR_PAD_LEFT);
            $ArrayDay[$Day] = $Day;
        }
        return $ArrayDay;
    }
}


if (! function_exists('GetDateToDate')){
    function GetDateToDate($date) {
        $exp = explode("-", $date);
        return $exp[2];
    }
}

if (! function_exists('GetArrayDayIndo')) {
    function GetArrayDayIndo() {
        $ArrayDay = array(
            'Sunday' => 'Minggu',
            'Monday' => 'Senin',
            'Tuesday' => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday' => 'Kamis',
            'Friday' => 'Jum\'at',
            'Saturday' => 'Sabtu'
        );
        return $ArrayDay;
    }
}


if(! function_exists('GetMonthToNumber')) {
    function GetMonthToNumber($m) {
        $h='';
        if($m =='January'){ $h='01';
        }
        elseif($m =='February'){ $h='02';
        }
        elseif($m =='March'){ $h='03';
        }
        elseif($m =='April'){ $h='04';
        }
        elseif($m =='May'){ $h='05';
        }
        elseif($m =='June'){ $h='06';
        }
        elseif($m =='July'){ $h='07';
        }
        elseif($m =='August'){ $h='08';
        }
        elseif($m =='September'){ $h='09';
        }
        elseif($m =='October'){ $h='10';
        }
        elseif($m =='November'){ $h='11';
        }
        elseif($m =='December'){ $h='12';
        }
        return $h;
    }
}

if(! function_exists('GetNumberToMonth')) {
    function GetNumberToMonth($m) {

        $monthName = date("F", mktime(0, 0, 0, $m, 10));
        return $monthName;
    }
}

if(! function_exists('DateToSql')) {
    function DateToSql($t,$f) {

        if($f =='d/F/Y')
        {
            $t = explode('/',$t);

            $tgl = $t[0];
            $bln = GetMonthToNumber($t[1]);
            $thn = $t[2];
        }

        return $thn.'-'.$bln.'-'.$tgl;
    }
}

if(! function_exists('sqlToDate')) {
    function sqlToDate($t,$f=false) {

        if($f =='d/F/Y')
        {
            $t = explode('-',$t);

            $btg = explode(' ',$t[2]);

            $tgl = $btg[0];
            $bln = GetNumberToMonth($t[1]);
            $thn = $t[0];

            return $tgl.'/'.$bln.'/'.$thn;

        }else{

            $t = explode('-',$t);

            $btg = explode(' ',$t[2]);

            $tgl = $btg[0];
            $bln = GetArrayMonth($t[1]);
            $thn = $t[0];

            return $tgl.' '.$bln.' '.$thn;

        }

    }
}

if(! function_exists('sqlToTime')) {
    function sqlToTime($t,$f=false) {

        $w = explode(' ',$t);

        if($f ==false)
        {
            $w = substr($w[1],0,5);
        }
        return $w;
    }
}

if (! function_exists('GetArrayMonth')) {
    function GetArrayMonth() {
        $ArrayMonth = array(
            '01' => 'Januari',
            '02' => 'Februari',
            '03' => 'Maret',
            '04' => 'April',
            '05' => 'Mei',
            '06' => 'Juni',
            '07' => 'Juli',
            '08' => 'Agustus',
            '09' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember');
        return $ArrayMonth;
    }
}

if (! function_exists('ConvertDateToMonth')) {
    function ConvertDateToMonth($date) {
        $exp = explode("-", $date);
        $Month = $exp[1];
        $ArrayMonth = array(
            '01' => 'Jan',
            '02' => 'Feb',
            '03' => 'Mar',
            '04' => 'Apr',
            '05' => 'Mei',
            '06' => 'Jun',
            '07' => 'Jul',
            '08' => 'Ags',
            '09' => 'Sep',
            '10' => 'Okt',
            '11' => 'Nov',
            '12' => 'Des');
        return $ArrayMonth[$Month];
    }
}

if (! function_exists('GetArrayYear')) {
    function GetArrayYear() {
        $ArrayYear = array();
        for ($i = 1900; $i <= date("Y"); $i++) {
            $ArrayYear[$i] = $i;
        }
        return $ArrayYear;
    }
}

if (! function_exists('GetOptionDay')) {
    function GetOptionDay($DayActive) {
        $ArrayDay = Date::GetArrayDay();
        return GetOption(false, $ArrayDay, $DayActive);
    }
}

if (! function_exists('GetOptionMonth')) {
    function GetOptionMonth($MonthActive) {
        $ArrayMonth = Date::GetArrayMonth();
        return GetOption(false, $ArrayMonth, $MonthActive);
    }
}

if (! function_exists('GetOptionYear')) {
    function GetOptionYear($YearActive) {
        $ArrayYear = Date::GetArrayYear();
        return GetOption(false, $ArrayYear, $YearActive);
    }
}

if (! function_exists('GetListCountry')) {
    function GetListCountry($ContryActive) {
        $Content = '';
        $ArrayCountry = file(PATH.'/php/Serialize/Country.txt');
        foreach ($ArrayCountry as $Line) {
            $ArrayData = explode("\t", $Line);
            $Selected = ($ContryActive == $ArrayData[0]) ? ' selected="selected"' : '';
            $Content .= '<option value="'.$ArrayData[0].'" '.$Selected.'>'.$ArrayData[1].'</option>';
        }
        return $Content;
    }
}

if (! function_exists('ConvertDateToArray')) {
    function ConvertDateToArray($Date) {
        $Array = array();

        $ArrayDate = explode(' ', $Date);
        $Date = $ArrayDate[0];
        $Time = (count($ArrayDate) == 2) ? $ArrayDate[1] : '00:00:00';

        $ArrayDateTemp = explode('-', $Date);
        $ArrayTimeTemp = explode(':', $Time);

        $Array['Year'] = $ArrayDateTemp[0];
        $Array['Month'] = $ArrayDateTemp[1];
        $Array['Day'] = $ArrayDateTemp[2];
        $Array['Hour'] = $ArrayTimeTemp[0];
        $Array['Minute'] = $ArrayTimeTemp[1];
        $Array['Second'] = $ArrayTimeTemp[2];

        return $Array;
    }
}

if (! function_exists('ConvertToUnixTime')) {
    function ConvertToUnixTime($String) {
        preg_match('/(\d{4})-(\d{2})-(\d{2})/i', $String, $Match);
        $UnixTime = mktime (0, 0, 0, $Match[2], $Match[3], $Match[1]);
        return $UnixTime;
    }
}

if (! function_exists('DateDiff')) {
    function DateDiff($StringDate1, $StringDate2) {
        if (strlen($StringDate1) < 10 || strlen($StringDate2) < 10) {
            return 'momments ago';
        }

        $StringDate1 = substr($StringDate1, 0, 10);
        $StringDate2 = substr($StringDate2, 0, 10);

        $UnixTime1 = ConvertToUnixTime($StringDate1);
        $UnixTime2 = ConvertToUnixTime($StringDate2);

        $TimeDiff = ($UnixTime2 - $UnixTime1) / (24 * 60 * 60);
        return $TimeDiff;
    }
}

if (! function_exists('GetFormatDate')) {
    function GetFormatDate($Date, $sep="-") {
        if (empty($Date)) {
            return '';
        }

        $ArrayDate = explode('-', $Date);
        $FormatDate = $ArrayDate[2] . $sep . $ArrayDate[1] . $sep . $ArrayDate[0];

        return $FormatDate;
    }
}

if (! function_exists('GetFormatDateCommon')) {
    function GetFormatDateCommon($String, $Param = array()) {
        $String = (strlen($String) > 10) ? substr($String, 0, 10) : $String;
        if ($String == '0000-00-00' || is_null($String)) {
            return '';
        }

        $Param['FormatDate'] = (isset($Param['FormatDate'])) ? $Param['FormatDate'] : "d/m/Y";

        return date($Param['FormatDate'], strtotime($String));
    }
}

if (! function_exists('ConvertDateToString')) {
    function ConvertDateToString($String, $DateOnly = 0, $ShowDay = 0) {

        if ($String == "0000-00-00 00:00:00" or $String == "0000-00-00" or $String == "") {
            return "-";
        }else{
            $ArrayMonth = GetArrayMonth();
            $ArrayDay = GetArrayDayIndo();
            $ArrayDate = ConvertDateToArray($String);

            if ($DateOnly == 1) {
                $Result = $ArrayDate['Day'] . ' ' . $ArrayMonth[$ArrayDate['Month']] . ' ' . $ArrayDate['Year'];
            } else {
                $Result = $ArrayDate['Day'] . ' ' . $ArrayMonth[$ArrayDate['Month']] . ' ' . $ArrayDate['Year'] . ' ' . $ArrayDate['Hour'] . ':' . $ArrayDate['Minute'];
            }

            if ($ShowDay == 1) {
                $Day = GetFormatDateCommon($String, array('FormatDate' => 'l'));
                $Result = $ArrayDay[$Day] . ', ' . $Result;
            }

            return $Result;

        }
    }
}

if (! function_exists('ConvertDateToRssType')) {
    function ConvertDateToRssType($String) {
        $ArrayDate = ConvertDateToArray($String);
        return date("D, j M Y G:i:s O", mktime($ArrayDate['Hour'], $ArrayDate['Minute'], $ArrayDate['Second'], $ArrayDate['Month'], $ArrayDate['Day'], $ArrayDate['Year']));
    }
}
if (! function_exists('waktu')) {
    function waktu($d) {

        return substr($d,-8);
    }
}

if (! function_exists('human_diff')) {
    function human_diff($date)
    {
        date_default_timezone_set('Asia/Jakarta');
        if (null == $date){
            return "-";
        }
        $original = ConvertToUnixTime($date);

        $chunks = array(
            array(60 * 60 * 24 * 365, 'tahun'),
            array(60 * 60 * 24 * 30, 'bulan'),
            array(60 * 60 * 24 * 7, 'minggu'),
            array(60 * 60 * 24, 'hari'),
            array(60 * 60, 'jam'),
            array(60, 'menit'),
        );

        $today = time();
        $since = $today - $original;

        if ($since > 604800)
        {
            $print = ConvertDateToString(date("Y-m-d", $original),1,1);
            return $print;
        }

        for ($i = 0, $j = count($chunks); $i < $j; $i++)
        {
            $seconds = $chunks[$i][0];
            $name = $chunks[$i][1];

            if (($count = floor($since / $seconds)) != 0)
                break;
        }

        $print = ($count == 1) ? '1 ' . $name : "$count {$name}";
        return $print . ' yang lalu';
    }
}


if (! function_exists('time_since2')) {
    function time_since2($date)
    {

        $original = ConvertToUnixTime($date);

        $chunks = array(
            array(60 * 60 * 24 * 365, 'years ago'),
            array(60 * 60 * 24 * 30, 'month ago'),
            array(60 * 60 * 24 * 7, 'weeks ago'),
            array(60 * 60 * 24, 'days ago'),
            array(60 * 60, 'hours ago'),
            array(60, 'minutes ago'),
        );

        $today = time();
        $since = $today - $original;

        for ($i = 0, $j = count($chunks); $i < $j; $i++)
        {
            $seconds = $chunks[$i][0];
            $name = $chunks[$i][1];

            if (($count = floor($since / $seconds)) != 0)
                break;
        }

        $print = ($count == 1) ? '1 ' . $name : "$count {$name}";
        return $print;
    }
}

?>
