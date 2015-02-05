<html>
<head>
<title><?php echo $title; ?></title>

<link rel="shortcut icon" href="<?php echo base_url(); ?>mos-css/img/devil-icon.png"> <!--Pemanggilan gambar favicon-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>mos-css/mos-style.css"> <!--pemanggilan file css-->
<?php echo link_tag(base_url().'css/jilc.png','shortcut icon','image/ico'); ?>
<script type="text/javascript" src="<?php echo base_url(); ?>script/jquery.min.js"></script>
<script language="javascript">
$(document).ready(function() {
var rows=$('table').find('tbody tr').length;
var no_rec_per_page=20;
var no_pages= Math.ceil(rows/no_rec_per_page);
var $pagenumbers=$('<div id="pages"></div>');
for(i=0;i<no_pages;i++)
{
$('<span class="page">'+(i+1)+'</span>').appendTo($pagenumbers);
}
$pagenumbers.insertAfter('table');
$('.page').hover(
function(){
$(this).addClass('hover');
},
function(){
$(this).removeClass('hover');
}
);
$('table').find('tbody tr').hide();
var tr=$('table tbody tr');
for(var i=0;i<=no_rec_per_page-1;i++)
{
$(tr[i]).show();
}
$('span').click(function(event){
$('table').find('tbody tr').hide();
for(i=($(this).text()-1)*no_rec_per_page;i<=$(this).text()*no_rec_per_page-1;i++)
{
$(tr[i]).show();
}
});
});
</script>

<style>
.hover { background-color: #106166; color: #fff; cursor:pointer; }
.page{ margin:5px;}
    
tbody tr:nth-of-type(even){

}

tbody tr:nth-of-type(odd){

}
thead th{

}
</style>
</head>

<body>
<div id="header">
	<div class="inHeader">
		<div class="mosAdmin">
		Hallo, Administrator<br>
		<a href="<?php echo base_url(); ?>">Lihat website</a> | <?php echo anchor('#','about')?> | <?php echo anchor('c_login/logout','keluar');?>
		</div>
	<div class="clear"></div>
	</div>
</div>

<div id="wrapper">
	<div id="leftBar">
	<ul>
		<li><?php echo anchor('c_login/dashboard','Dashboard');?></li>
		<li><?php echo anchor('c_soal','list soal');?></li>
		<li><?php echo anchor('c_soal/add_soal','add soal');?></li>
<!--            <li><?php echo anchor('c_berita','list berita');?></li>
		<li><?php echo anchor('c_berita/add_berita','add berita');?></li>-->
	</ul>
	</div>
	<div id="rightContent">
	<h3>Daftar Universitas</h3>
        
        <?php ?>
	
		<table class="data">
            <thead>
			<tr class="data">
				<th class="data" width="60px">No.</th>
				<th class="data">Universitas</th>
				<th class="data">Jurusan</th>
				<th class="data">Program Studi</th>
				<th class="data">Kursi</th>
				<th class="data">Grade</th>
                                <th class="data" width="50px" colspan="3" >Pilihan</th>
			</tr>
            </thead>
                    <tbody>
                        <?php
                            $i=1;
                            foreach($query->result() as $row) :
                        ?>
				<tr class="data">
                            
				<td class="data"><center><?php echo $i; ?></center></td>
				<td class="data"><?php echo $row->universitas; ?></td>
				<td class="data"><?php echo $row->jurusan?></td>
				<td class="data"><?php echo $row->program_studi?></td>
				<td class="data"><?php echo $row->kursi?></td>
				<td class="data"><?php echo $row->point?></td>
                                <td class="data" width="75px">
				<center>
				<a href="./c_universitas/edit/<?php echo $row->id_universitas ?>"><img src="<?php echo base_url(); ?>mos-css/img/oke.png"></a>&nbsp;&nbsp;&nbsp;
				<a href="./c_universitas/delete/<?php echo $row->id_universitas ?>"><img src="<?php echo base_url(); ?>mos-css/img/detail.png"></a>
				</center>
				</td>
                            
			</tr>
                    </tbody>
                        <?php $i++;
                            endforeach;
                        ?>
			
		</table>
        <?php echo form_open('c_universitas/add'); ?>
        <input class="button" type="submit" name="Tambah" value="Tambah">
        </p>
        <?php echo form_close(); ?>
	</div>
<div class="clear"></div>
<div id="footer">
	&copy; 2014 Genetika css template | <a href="#">Nama Website Anda</a> | design <a href="http://arirusmanto.com" target="_blank">duzelaryaxx@yahoo.com</a><br>
	redesign <a href="#">Tulis nama anda disini</a> | Silahkan baca <a href="lisensi.txt" target="_blank">Lisensi</a>
</div>
</div>
</body>
</html>