<?php
echo validation_errors();
echo form_open('ips/hitung_ips');
echo form_label('Nama mata kuliah');
echo form_input('namamk1');
echo "<br>";
echo form_label('Nilai mata kuliah');
echo form_input('nilaimk1');
echo "<br>";
echo form_label('Jumlah SKS');
echo form_input('jumlahsks1');
echo "<br>";
echo "<br>";
echo form_label('Nama mata kuliah');
echo form_input('namamk2');
echo "<br>";
echo form_label('Nilai mata kuliah');
echo form_input('nilaimk2');
echo "<br>";
echo form_label('Jumlah SKS');
echo form_input('jumlahsks2');
echo "<br>";
echo "<br>";
echo form_label('Nama mata kuliah');
echo form_input('namamk3');
echo "<br>";
echo form_label('Nilai mata kuliah');
echo form_input('nilaimk3');
echo "<br>";
echo form_label('Jumlah SKS');
echo form_input('jumlahsks3');
echo "<br>";
echo "<br>";
echo form_label('Nama mata kuliah');
echo form_input('namamk4');
echo "<br>";
echo form_label('Nilai mata kuliah');
echo form_input('nilaimk4');
echo "<br>";
echo form_label('Jumlah SKS');
echo form_input('jumlahsks4');
echo "<br>";
echo "<br>";
echo form_label('Nama mata kuliah');
echo form_input('namamk5');
echo "<br>";
echo form_label('Nilai mata kuliah');
echo form_input('nilaimk5');
echo "<br>";
echo form_label('Jumlah SKS');
echo form_input('jumlahsks5');
echo "<br>";
echo "<br>";
echo form_label('Nama mata kuliah');
echo form_input('namamk6');
echo "<br>";
echo form_label('Nilai mata kuliah');
echo form_input('nilaimk6');
echo "<br>";
echo form_label('Jumlah SKS');
echo form_input('jumlahsks6');
echo "<br>";
echo "<br>";


echo form_submit('kirim', 'kirim');
echo form_close();

?>