<?php
//Endpoints Of Hackerearth API
use Faker\Provider\File;
use Illuminate\Support\Facades\Response;

$endpoint_compile = "https://api.hackerearth.com/v3/code/compile/";
$endpoint_run = "https://api.hackerearth.com/v3/code/run/";
function compile($hackerearth,$config){
	// Get cURL resource
	$curl = curl_init();
	// Seting some options
	curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://api.hackerearth.com/v3/code/compile/',
    CURLOPT_POST => 1,
    CURLOPT_CAINFO => 'cacert.pem',
    CURLOPT_SSL_VERIFYPEER => 'true',
    CURLOPT_ENCODING => 'UTF-8',
    CURLOPT_POSTFIELDS => array(
        				'client_secret' => $hackerearth['client_secret'],
                        'time_limit' => $hackerearth['time_limit']||$config['time'],
        				'memory_limit' => $hackerearth['memory_limit']||$config['memory'],
        				'source' => $config['source'],
        				'input' => $config['input'],
                        'lang' => $config['language']
    )
	));
	// Send the request & returning response 
	return json_decode(curl_exec($curl), true);
}
function compile_with_file($hackerearth,$config){
	   // Get cURL resource
    $curl = curl_init();
    // Seting some options
    $myfile = fopen($config['file'], "r") or die("Unable to open file!");
    curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://api.hackerearth.com/v3/code/compile/',
    CURLOPT_POST => 1,
    CURLOPT_CAINFO => 'cacert.pem',
    CURLOPT_SSL_VERIFYPEER => 'true',
    CURLOPT_ENCODING => 'UTF-8',
    CURLOPT_POSTFIELDS => array(
                        'client_secret' => $hackerearth['client_secret'],
                        'time_limit' => $hackerearth['time_limit']||$config['time'],
                        'memory_limit' => $hackerearth['memory_limit']||$config['memory'],
                        'source' => fread($myfile,filesize($config['file'])),
                        'input' => $config['input'],
                        'lang' => $config['language']
    )
    ));
    // Send the request & returning response 
    return json_decode(curl_exec($curl), true);
}
function run($hackerearth,$config){
	// Get cURL resource
	$curl = curl_init();
	// Seting some options
	curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://api.hackerearth.com/v3/code/run/',
    CURLOPT_POST => 1,
    CURLOPT_CAINFO => 'cacert.pem',
    CURLOPT_SSL_VERIFYPEER => 'true',
    CURLOPT_ENCODING => 'UTF-8',
    CURLOPT_POSTFIELDS => array(
        				'client_secret' => $hackerearth['client_secret'],
                        'time_limit' => $hackerearth['time_limit']||$config['time'],
        				'memory_limit' => $hackerearth['memory_limit']||$config['memory'],
        				'source' => $config['source'],
        				'input' => $config['input'],
                        'lang' => $config['language']
    )
	));
	// Send the request & returning response 
	return json_decode(curl_exec($curl), true);
}
function run_with_file($hackerearth,$config){
    // Get cURL resource
    $curl = curl_init();
    // Seting some options
    $myfile = fopen($config['file'], "r") or die("Unable to open file!");
    curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://api.hackerearth.com/v3/code/run/',
    CURLOPT_POST => 1,
    CURLOPT_CAINFO => 'cacert.pem',
    CURLOPT_SSL_VERIFYPEER => 'true',
    CURLOPT_ENCODING => 'UTF-8',
    CURLOPT_POSTFIELDS => array(
                        'client_secret' => $hackerearth['client_secret'],
                        'time_limit' => $hackerearth['time_limit']||$config['time'],
                        'memory_limit' => $hackerearth['memory_limit']||$config['memory'],
                        'source' => fread($myfile,filesize($config['file'])),
                        'input' => $config['input'],
                        'lang' => $config['language']
    )
    ));
    // Send the request & returning response 
    return json_decode(curl_exec($curl), true);
}
function readBook($id)
{
    $file = Book::findOrFail($id);
    if (File::isFile($file))
    {
        $file = File::get($file);
        $response = Response::make($file, 200);
        
        $response->header('Content-Type', 'application/pdf');
        
        return $response;
    }
}
function show($filename)
{
    $filename = '1.pdf';
    $filepath = 'storage/Problems/';
    $path = $filepath.$filename;
    
    return Response::make(file_get_contents($path), 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; '.$filename,
    ]);
}

function check_date($str,$ptr,$qtr){
    $len1=strlen($str);
    for($i=0;$i<$len1;$i++){
        if($str[$i]<=$qtr[$i] && $ptr[$i]<$qtr[$i]){
            return 0;
        }
        elseif($str[$i]> $qtr[$i])
            return 1;
        elseif($qtr[$i]>$ptr[$i])
            return 2;
        
    }
}

?>