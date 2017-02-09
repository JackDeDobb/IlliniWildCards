
<?php
echo'
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Illini Wildcards</title>
	<link href="css/design.css" media="screen" rel="stylesheet" title="no title"/>
	<style type="text/css">
	#vote_button { align:center; background: url(\'vote.png\') no-repeat scroll 0 0 transparent; cursor: pointer; height: 40px; width: 95px; border: 10px solid white; }
	#vote_count { padding: 8px 0pt 0pt 30px; }';
	?>
	<?php 
	for ($j=1; $j<100; $j++)
	{
	echo'
	#vote_button_'.$j.' { margin-left:18%; background: url(\'voteicon.png\') no-repeat scroll 0 0 transparent; cursor: pointer; height: 40px; width: 150px; }
		#vote_count_'.$j.' { line-height:30px; text-align:center; margin-left:40%;  width:30px; height:30px; background:#ffffff; border-radius:10px;}';
	}
	?>
	<?php echo'
</style>
</head>
<body>
<div align="center"><a href="index.html" id="home">Illini Wildcards</a></div>
<div id="imageborder">
</div>
<div id="backg">
<div align="center"><div id="title" background:#000000; color:white; border-radius:25px; align="center"><h1>Vote for your favorites this week!</h1></div></div>
<div align="center">
<div style="display: table;">
<div id="imgrow" style="display: table-row;">

';
?>
    <?php

   $files = glob("submissions/*.*");

  for ($i=1; $i<count($files); $i++)

{

$image = $files[$i];
$supported_file = array(
    'gif',
    'jpg',
    'jpeg',
    'png'
);

$ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
if (in_array($ext, $supported_file)) {
    echo '<div style="display: table-cell;"><div id="image" style="width: 200px; ""><img src="'.$image .'" height="200" width="200"/><div id="vote_button_'.$i.'" align="center"></div><div id="vote_count_'.$i.'" align="center">&nbsp;</div></div></div>';
if (($i % 4 == 0 && $i != 0)){
	echo '</div><div id="imgrow" style="display: table-row;">';
	}
} else {
    continue;
 }

}

?>

<?php
echo '</div></div></div></div></div><div>'
?>
<?php
echo '<script src= "https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"	type="text/javascript"></script>';?>
<script type="text/javascript">
	$(document).ready(function()
	{
		// Display number of votes for this item on page load.
		var item_id = 1;	// This is the item_id for which the number of votes are to be displayed.
		var ajax_data1 = "query=votecount&item_id=" + item_id;
		jQuery.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data1,
			dataType: "html",
			success: function(html){
				jQuery("#vote_count_1").html(html);
		   }
		});
	});
	$("#vote_button_1").click(function()
	{
		var item_id = 1;	// This is the item_id for which the number of votes are to be displayed.
		var user_id = 1;	// This is the user_id who is voting.
		var ajax_data = "query=vote&item_id=" + item_id + "&user_id=" + user_id;
		$.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data,
			dataType: "html",
			success: function(votecount){
				if(votecount == -1){
					// The user has already voted.
					$("#vote_recorded").css({ display:'none' });
					$("#vote_already").css({ display:'' });
				}
				else
				{
					// Vote recorded, display the updated count.
					$("#vote_already").css({ display:'none' });
					$("#vote_count_1").html(votecount);
					$("#vote_recorded").css({ display:'' });
				}
			}
		});
	});
	$(document).ready(function()
	{
		// Display number of votes for this item on page load.
		var item_id = 2;	// This is the item_id for which the number of votes are to be displayed.
		var ajax_data1 = "query=votecount&item_id=" + item_id;
		jQuery.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data1,
			dataType: "html",
			success: function(html){
				jQuery("#vote_count_2").html(html);
		   }
		});
	});
	$("#vote_button_2").click(function()
	{
		var item_id = 2;	// This is the item_id for which the number of votes are to be displayed.
		var user_id = 1;	// This is the user_id who is voting.
		var ajax_data = "query=vote&item_id=" + item_id + "&user_id=" + user_id;
		$.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data,
			dataType: "html",
			success: function(votecount){
				if(votecount == -1){
					// The user has already voted.
					$("#vote_recorded").css({ display:'none' });
					$("#vote_already").css({ display:'' });
				}
				else
				{
					// Vote recorded, display the updated count.
					$("#vote_already").css({ display:'none' });
					$("#vote_count_2").html(votecount);
					$("#vote_recorded").css({ display:'' });
				}
			}
		});
	});
	$(document).ready(function()
	{
		// Display number of votes for this item on page load.
		var item_id = 3;	// This is the item_id for which the number of votes are to be displayed.
		var ajax_data1 = "query=votecount&item_id=" + item_id;
		jQuery.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data1,
			dataType: "html",
			success: function(html){
				jQuery("#vote_count_3").html(html);
		   }
		});
	});
	$("#vote_button_3").click(function()
	{
		var item_id = 3;	// This is the item_id for which the number of votes are to be displayed.
		var user_id = 1;	// This is the user_id who is voting.
		var ajax_data = "query=vote&item_id=" + item_id + "&user_id=" + user_id;
		$.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data,
			dataType: "html",
			success: function(votecount){
				if(votecount == -1){
					// The user has already voted.
					$("#vote_recorded").css({ display:'none' });
					$("#vote_already").css({ display:'' });
				}
				else
				{
					// Vote recorded, display the updated count.
					$("#vote_already").css({ display:'none' });
					$("#vote_count_3").html(votecount);
					$("#vote_recorded").css({ display:'' });
				}
			}
		});
	});
	$(document).ready(function()
	{
		// Display number of votes for this item on page load.
		var item_id = 4;	// This is the item_id for which the number of votes are to be displayed.
		var ajax_data1 = "query=votecount&item_id=" + item_id;
		jQuery.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data1,
			dataType: "html",
			success: function(html){
				jQuery("#vote_count_4").html(html);
		   }
		});
	});
	$("#vote_button_4").click(function()
	{
		var item_id = 4;	// This is the item_id for which the number of votes are to be displayed.
		var user_id = 1;	// This is the user_id who is voting.
		var ajax_data = "query=vote&item_id=" + item_id + "&user_id=" + user_id;
		$.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data,
			dataType: "html",
			success: function(votecount){
				if(votecount == -1){
					// The user has already voted.
					$("#vote_recorded").css({ display:'none' });
					$("#vote_already").css({ display:'' });
				}
				else
				{
					// Vote recorded, display the updated count.
					$("#vote_already").css({ display:'none' });
					$("#vote_count_4").html(votecount);
					$("#vote_recorded").css({ display:'' });
				}
			}
		});
	});
	$(document).ready(function()
	{
		// Display number of votes for this item on page load.
		var item_id = 5;	// This is the item_id for which the number of votes are to be displayed.
		var ajax_data1 = "query=votecount&item_id=" + item_id;
		jQuery.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data1,
			dataType: "html",
			success: function(html){
				jQuery("#vote_count_5").html(html);
		   }
		});
	});
	$("#vote_button_5").click(function()
	{
		var item_id = 5;	// This is the item_id for which the number of votes are to be displayed.
		var user_id = 1;	// This is the user_id who is voting.
		var ajax_data = "query=vote&item_id=" + item_id + "&user_id=" + user_id;
		$.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data,
			dataType: "html",
			success: function(votecount){
				if(votecount == -1){
					// The user has already voted.
					$("#vote_recorded").css({ display:'none' });
					$("#vote_already").css({ display:'' });
				}
				else
				{
					// Vote recorded, display the updated count.
					$("#vote_already").css({ display:'none' });
					$("#vote_count_5").html(votecount);
					$("#vote_recorded").css({ display:'' });
				}
			}
		});
	});
	$(document).ready(function()
	{
		// Display number of votes for this item on page load.
		var item_id = 6;	// This is the item_id for which the number of votes are to be displayed.
		var ajax_data1 = "query=votecount&item_id=" + item_id;
		jQuery.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data1,
			dataType: "html",
			success: function(html){
				jQuery("#vote_count_6").html(html);
		   }
		});
	});
	$("#vote_button_6").click(function()
	{
		var item_id = 6;	// This is the item_id for which the number of votes are to be displayed.
		var user_id = 1;	// This is the user_id who is voting.
		var ajax_data = "query=vote&item_id=" + item_id + "&user_id=" + user_id;
		$.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data,
			dataType: "html",
			success: function(votecount){
				if(votecount == -1){
					// The user has already voted.
					$("#vote_recorded").css({ display:'none' });
					$("#vote_already").css({ display:'' });
				}
				else
				{
					// Vote recorded, display the updated count.
					$("#vote_already").css({ display:'none' });
					$("#vote_count_6").html(votecount);
					$("#vote_recorded").css({ display:'' });
				}
			}
		});
	});
	$(document).ready(function()
	{
		// Display number of votes for this item on page load.
		var item_id = 7;	// This is the item_id for which the number of votes are to be displayed.
		var ajax_data1 = "query=votecount&item_id=" + item_id;
		jQuery.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data1,
			dataType: "html",
			success: function(html){
				jQuery("#vote_count_7").html(html);
		   }
		});
	});
	$("#vote_button_7").click(function()
	{
		var item_id = 7;	// This is the item_id for which the number of votes are to be displayed.
		var user_id = 1;	// This is the user_id who is voting.
		var ajax_data = "query=vote&item_id=" + item_id + "&user_id=" + user_id;
		$.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data,
			dataType: "html",
			success: function(votecount){
				if(votecount == -1){
					// The user has already voted.
					$("#vote_recorded").css({ display:'none' });
					$("#vote_already").css({ display:'' });
				}
				else
				{
					// Vote recorded, display the updated count.
					$("#vote_already").css({ display:'none' });
					$("#vote_count_7").html(votecount);
					$("#vote_recorded").css({ display:'' });
				}
			}
		});
	});
	$(document).ready(function()
	{
		// Display number of votes for this item on page load.
		var item_id = 8;	// This is the item_id for which the number of votes are to be displayed.
		var ajax_data1 = "query=votecount&item_id=" + item_id;
		jQuery.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data1,
			dataType: "html",
			success: function(html){
				jQuery("#vote_count_8").html(html);
		   }
		});
	});
	$("#vote_button_8").click(function()
	{
		var item_id = 8;	// This is the item_id for which the number of votes are to be displayed.
		var user_id = 1;	// This is the user_id who is voting.
		var ajax_data = "query=vote&item_id=" + item_id + "&user_id=" + user_id;
		$.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data,
			dataType: "html",
			success: function(votecount){
				if(votecount == -1){
					// The user has already voted.
					$("#vote_recorded").css({ display:'none' });
					$("#vote_already").css({ display:'' });
				}
				else
				{
					// Vote recorded, display the updated count.
					$("#vote_already").css({ display:'none' });
					$("#vote_count_8").html(votecount);
					$("#vote_recorded").css({ display:'' });
				}
			}
		});
	});
	$(document).ready(function()
	{
		// Display number of votes for this item on page load.
		var item_id = 9;	// This is the item_id for which the number of votes are to be displayed.
		var ajax_data1 = "query=votecount&item_id=" + item_id;
		jQuery.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data1,
			dataType: "html",
			success: function(html){
				jQuery("#vote_count_9").html(html);
		   }
		});
	});
	$("#vote_button_9").click(function()
	{
		var item_id = 9;	// This is the item_id for which the number of votes are to be displayed.
		var user_id = 1;	// This is the user_id who is voting.
		var ajax_data = "query=vote&item_id=" + item_id + "&user_id=" + user_id;
		$.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data,
			dataType: "html",
			success: function(votecount){
				if(votecount == -1){
					// The user has already voted.
					$("#vote_recorded").css({ display:'none' });
					$("#vote_already").css({ display:'' });
				}
				else
				{
					// Vote recorded, display the updated count.
					$("#vote_already").css({ display:'none' });
					$("#vote_count_9").html(votecount);
					$("#vote_recorded").css({ display:'' });
				}
			}
		});
	});
	$(document).ready(function()
	{
		// Display number of votes for this item on page load.
		var item_id = 10;	// This is the item_id for which the number of votes are to be displayed.
		var ajax_data1 = "query=votecount&item_id=" + item_id;
		jQuery.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data1,
			dataType: "html",
			success: function(html){
				jQuery("#vote_count_10").html(html);
		   }
		});
	});
	$("#vote_button_10").click(function()
	{
		var item_id = 10;	// This is the item_id for which the number of votes are to be displayed.
		var user_id = 1;	// This is the user_id who is voting.
		var ajax_data = "query=vote&item_id=" + item_id + "&user_id=" + user_id;
		$.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data,
			dataType: "html",
			success: function(votecount){
				if(votecount == -1){
					// The user has already voted.
					$("#vote_recorded").css({ display:'none' });
					$("#vote_already").css({ display:'' });
				}
				else
				{
					// Vote recorded, display the updated count.
					$("#vote_already").css({ display:'none' });
					$("#vote_count_10").html(votecount);
					$("#vote_recorded").css({ display:'' });
				}
			}
		});
	});
	$(document).ready(function()
	{
		// Display number of votes for this item on page load.
		var item_id = 11;	// This is the item_id for which the number of votes are to be displayed.
		var ajax_data1 = "query=votecount&item_id=" + item_id;
		jQuery.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data1,
			dataType: "html",
			success: function(html){
				jQuery("#vote_count_11").html(html);
		   }
		});
	});
	$("#vote_button_11").click(function()
	{
		var item_id = 11;	// This is the item_id for which the number of votes are to be displayed.
		var user_id = 1;	// This is the user_id who is voting.
		var ajax_data = "query=vote&item_id=" + item_id + "&user_id=" + user_id;
		$.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data,
			dataType: "html",
			success: function(votecount){
				if(votecount == -1){
					// The user has already voted.
					$("#vote_recorded").css({ display:'none' });
					$("#vote_already").css({ display:'' });
				}
				else
				{
					// Vote recorded, display the updated count.
					$("#vote_already").css({ display:'none' });
					$("#vote_count_11").html(votecount);
					$("#vote_recorded").css({ display:'' });
				}
			}
		});
	});
	$(document).ready(function()
	{
		// Display number of votes for this item on page load.
		var item_id = 12;	// This is the item_id for which the number of votes are to be displayed.
		var ajax_data1 = "query=votecount&item_id=" + item_id;
		jQuery.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data1,
			dataType: "html",
			success: function(html){
				jQuery("#vote_count_12").html(html);
		   }
		});
	});
	$("#vote_button_12").click(function()
	{
		var item_id = 12;	// This is the item_id for which the number of votes are to be displayed.
		var user_id = 1;	// This is the user_id who is voting.
		var ajax_data = "query=vote&item_id=" + item_id + "&user_id=" + user_id;
		$.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data,
			dataType: "html",
			success: function(votecount){
				if(votecount == -1){
					// The user has already voted.
					$("#vote_recorded").css({ display:'none' });
					$("#vote_already").css({ display:'' });
				}
				else
				{
					// Vote recorded, display the updated count.
					$("#vote_already").css({ display:'none' });
					$("#vote_count_12").html(votecount);
					$("#vote_recorded").css({ display:'' });
				}
			}
		});
	});
	$(document).ready(function()
	{
		// Display number of votes for this item on page load.
		var item_id = 13;	// This is the item_id for which the number of votes are to be displayed.
		var ajax_data1 = "query=votecount&item_id=" + item_id;
		jQuery.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data1,
			dataType: "html",
			success: function(html){
				jQuery("#vote_count_13").html(html);
		   }
		});
	});
	$("#vote_button_13").click(function()
	{
		var item_id = 13;	// This is the item_id for which the number of votes are to be displayed.
		var user_id = 1;	// This is the user_id who is voting.
		var ajax_data = "query=vote&item_id=" + item_id + "&user_id=" + user_id;
		$.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data,
			dataType: "html",
			success: function(votecount){
				if(votecount == -1){
					// The user has already voted.
					$("#vote_recorded").css({ display:'none' });
					$("#vote_already").css({ display:'' });
				}
				else
				{
					// Vote recorded, display the updated count.
					$("#vote_already").css({ display:'none' });
					$("#vote_count_13").html(votecount);
					$("#vote_recorded").css({ display:'' });
				}
			}
		});
	});
	$(document).ready(function()
	{
		// Display number of votes for this item on page load.
		var item_id = 14;	// This is the item_id for which the number of votes are to be displayed.
		var ajax_data1 = "query=votecount&item_id=" + item_id;
		jQuery.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data1,
			dataType: "html",
			success: function(html){
				jQuery("#vote_count_14").html(html);
		   }
		});
	});
	$("#vote_button_14").click(function()
	{
		var item_id = 14;	// This is the item_id for which the number of votes are to be displayed.
		var user_id = 1;	// This is the user_id who is voting.
		var ajax_data = "query=vote&item_id=" + item_id + "&user_id=" + user_id;
		$.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data,
			dataType: "html",
			success: function(votecount){
				if(votecount == -1){
					// The user has already voted.
					$("#vote_recorded").css({ display:'none' });
					$("#vote_already").css({ display:'' });
				}
				else
				{
					// Vote recorded, display the updated count.
					$("#vote_already").css({ display:'none' });
					$("#vote_count_14").html(votecount);
					$("#vote_recorded").css({ display:'' });
				}
			}
		});
	});
	$(document).ready(function()
	{
		// Display number of votes for this item on page load.
		var item_id = 15;	// This is the item_id for which the number of votes are to be displayed.
		var ajax_data1 = "query=votecount&item_id=" + item_id;
		jQuery.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data1,
			dataType: "html",
			success: function(html){
				jQuery("#vote_count_15").html(html);
		   }
		});
	});
	$("#vote_button_15").click(function()
	{
		var item_id = 15;	// This is the item_id for which the number of votes are to be displayed.
		var user_id = 1;	// This is the user_id who is voting.
		var ajax_data = "query=vote&item_id=" + item_id + "&user_id=" + user_id;
		$.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data,
			dataType: "html",
			success: function(votecount){
				if(votecount == -1){
					// The user has already voted.
					$("#vote_recorded").css({ display:'none' });
					$("#vote_already").css({ display:'' });
				}
				else
				{
					// Vote recorded, display the updated count.
					$("#vote_already").css({ display:'none' });
					$("#vote_count_15").html(votecount);
					$("#vote_recorded").css({ display:'' });
				}
			}
		});
	});
	$(document).ready(function()
	{
		// Display number of votes for this item on page load.
		var item_id = 16;	// This is the item_id for which the number of votes are to be displayed.
		var ajax_data1 = "query=votecount&item_id=" + item_id;
		jQuery.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data1,
			dataType: "html",
			success: function(html){
				jQuery("#vote_count_16").html(html);
		   }
		});
	});
	$("#vote_button_16").click(function()
	{
		var item_id = 16;	// This is the item_id for which the number of votes are to be displayed.
		var user_id = 1;	// This is the user_id who is voting.
		var ajax_data = "query=vote&item_id=" + item_id + "&user_id=" + user_id;
		$.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data,
			dataType: "html",
			success: function(votecount){
				if(votecount == -1){
					// The user has already voted.
					$("#vote_recorded").css({ display:'none' });
					$("#vote_already").css({ display:'' });
				}
				else
				{
					// Vote recorded, display the updated count.
					$("#vote_already").css({ display:'none' });
					$("#vote_count_16").html(votecount);
					$("#vote_recorded").css({ display:'' });
				}
			}
		});
	});
	$(document).ready(function()
	{
		// Display number of votes for this item on page load.
		var item_id = 17;	// This is the item_id for which the number of votes are to be displayed.
		var ajax_data1 = "query=votecount&item_id=" + item_id;
		jQuery.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data1,
			dataType: "html",
			success: function(html){
				jQuery("#vote_count_17").html(html);
		   }
		});
	});
	$("#vote_button_17").click(function()
	{
		var item_id = 17;	// This is the item_id for which the number of votes are to be displayed.
		var user_id = 1;	// This is the user_id who is voting.
		var ajax_data = "query=vote&item_id=" + item_id + "&user_id=" + user_id;
		$.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data,
			dataType: "html",
			success: function(votecount){
				if(votecount == -1){
					// The user has already voted.
					$("#vote_recorded").css({ display:'none' });
					$("#vote_already").css({ display:'' });
				}
				else
				{
					// Vote recorded, display the updated count.
					$("#vote_already").css({ display:'none' });
					$("#vote_count_17").html(votecount);
					$("#vote_recorded").css({ display:'' });
				}
			}
		});
	});
	$(document).ready(function()
	{
		// Display number of votes for this item on page load.
		var item_id = 18;	// This is the item_id for which the number of votes are to be displayed.
		var ajax_data1 = "query=votecount&item_id=" + item_id;
		jQuery.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data1,
			dataType: "html",
			success: function(html){
				jQuery("#vote_count_18").html(html);
		   }
		});
	});
	$("#vote_button_18").click(function()
	{
		var item_id = 18;	// This is the item_id for which the number of votes are to be displayed.
		var user_id = 1;	// This is the user_id who is voting.
		var ajax_data = "query=vote&item_id=" + item_id + "&user_id=" + user_id;
		$.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data,
			dataType: "html",
			success: function(votecount){
				if(votecount == -1){
					// The user has already voted.
					$("#vote_recorded").css({ display:'none' });
					$("#vote_already").css({ display:'' });
				}
				else
				{
					// Vote recorded, display the updated count.
					$("#vote_already").css({ display:'none' });
					$("#vote_count_18").html(votecount);
					$("#vote_recorded").css({ display:'' });
				}
			}
		});
	});
	$(document).ready(function()
	{
		// Display number of votes for this item on page load.
		var item_id = 19;	// This is the item_id for which the number of votes are to be displayed.
		var ajax_data1 = "query=votecount&item_id=" + item_id;
		jQuery.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data1,
			dataType: "html",
			success: function(html){
				jQuery("#vote_count_19").html(html);
		   }
		});
	});
	$("#vote_button_19").click(function()
	{
		var item_id = 19;	// This is the item_id for which the number of votes are to be displayed.
		var user_id = 1;	// This is the user_id who is voting.
		var ajax_data = "query=vote&item_id=" + item_id + "&user_id=" + user_id;
		$.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data,
			dataType: "html",
			success: function(votecount){
				if(votecount == -1){
					// The user has already voted.
					$("#vote_recorded").css({ display:'none' });
					$("#vote_already").css({ display:'' });
				}
				else
				{
					// Vote recorded, display the updated count.
					$("#vote_already").css({ display:'none' });
					$("#vote_count_19").html(votecount);
					$("#vote_recorded").css({ display:'' });
				}
			}
		});
	});
	$(document).ready(function()
	{
		// Display number of votes for this item on page load.
		var item_id = 20;	// This is the item_id for which the number of votes are to be displayed.
		var ajax_data1 = "query=votecount&item_id=" + item_id;
		jQuery.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data1,
			dataType: "html",
			success: function(html){
				jQuery("#vote_count_20").html(html);
		   }
		});
	});
	$("#vote_button_20").click(function()
	{
		var item_id = 20;	// This is the item_id for which the number of votes are to be displayed.
		var user_id = 1;	// This is the user_id who is voting.
		var ajax_data = "query=vote&item_id=" + item_id + "&user_id=" + user_id;
		$.ajax({
			type: "GET",
			url: "vote.php",
			data: ajax_data,
			dataType: "html",
			success: function(votecount){
				if(votecount == -1){
					// The user has already voted.
					$("#vote_recorded").css({ display:'none' });
					$("#vote_already").css({ display:'' });
				}
				else
				{
					// Vote recorded, display the updated count.
					$("#vote_already").css({ display:'none' });
					$("#vote_count_20").html(votecount);
					$("#vote_recorded").css({ display:'' });
				}
			}
		});
	});
	</script>

