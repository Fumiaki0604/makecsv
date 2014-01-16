<?php
	// CSVファイル名の設定
	$csv_file = "file.csv";
	$csv  = array();
	$filename = "01_Endai.csv";
	$fr = fopen($filename, "r");
	$fw = fopen($csv_file,"w");

while (($data = fgetcsv($fr, 0, ",")) !== FALSE) {
		//配列の1番目と2番目を入れ替え
		$temp = $data[1];
		$data[1] = $data[0];
		$data[0] = $temp;
  		$csv[] = $data;
}
unset($csv[0]);
//csvファイルへの書き込み
foreach ($csv as $fields) {
				fputcsv($fw, $fields);
			}
fclose($fw);
fclose($fr);
?>