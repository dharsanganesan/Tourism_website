<?php include ('dash_board.php');?>
<body>
<div class="content">
<?php

require_once('main.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="recordcurd.php">
  <meta name="description" content="Bootstrap.">  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<style>
  .label_32 {
    font-family: cursive;
    color: black;
    text-align: left;
    font-weight: 700;
    padding-left: 40px;
}
  </style>
  <h3 class="label_32">Manage Feedback/Enquiries</h3>
<body style="background-color:white; margin-right: 10px;margin-left: 10px;">
    <!-- <section style="float: right; margin-right: 10px;">
    <div style="margin-top:15px; display: flex; ">
        <h6><span><i class="fa fa-home" aria-hidden="true"></i></span><span class="letter"><a href="" style="color: #96a4a4;">Home</a></span></h6>
        <h6><span><i class="fa fa-angle-right" aria-hidden="true"></i></span><span class="letter"><a href=""  style="color: #96a4a4;">Master</a></span></h6>
        <h6><span><i class="fa fa-angle-right" aria-hidden="true"></i></span><span class="letter"><a href=""  style="color: #96a4a4;">Category</a></span></h6>
    </div><br>
</section> -->

<!-- <section class="print">
<h2 class="font">Record</h2>
</section><br>
<hr class="print">
<section class="print">
  <div class="print">
<div class="container">
<div class="row header" style="text-align:center;color:green">
</div>
</div>
</section> -->
<section class="river">
<table class="table table-striped table-hover makeEditable" id="Table" >
                <thead  style="text-align:center;">
                    <tr>
                        <th>S.no</th>
                        <th>First Name</th>                       
                        <th>Email-id</th>
                        <th>Phone number</th>
                        <th>Subject</th>
                        <th>Description</th>
                        <th>Feedback</th>
                    </tr>
                </thead>
                <tbody>
                      <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php include('dashcon.php');?>
            <?php     
            // GET CONNECTION ERRORS 
  if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
} 

           $qry = "SELECT * FROM `recover` WHERE 1";
           $count = 1;  
           if($result = $db->query($qry)){
            while ($row = $result->fetch_assoc()) {
                  ?>
            <tr style="text-align:center;">
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                    <td><?php echo $count++; ?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['mail'];?></td>
                <td><?php echo $row['phone'];?></td>
                <td><?php echo $row['subject'];?></td>
                <td><?php echo $row['description'];?></td>  
                <td><?php echo $row['feedback'];?></td>      
            </tr>
            <?php
            }
                }    
            ?>
                 
                
                </tbody>
            </table>
              </div>
</section>
</body>
<style>
  .river{
    width: 160vh;
    margin-top: 30px;
    margin-left: 65px;
}
  </style>
<script>
$(document).ready(function(){
    $('#Table').dataTable();
});

"use strict";

function IterarCamposEdit(t, n) {
	function i(t) {
		if (null == colsEdi) return !0;
		for (var n = 0; n < colsEdi.length; n++)
			if (t == colsEdi[n]) return !0;
		return !1
	}
	var o = 0;
	t.each(function () {
		o++, "buttons" != $(this).attr("name") && i(o - 1) && n($(this))
	})
}

function FijModoNormal(t) {
	$(t).parent().find("#bAcep").hide(), $(t).parent().find("#bCanc").hide(), $(t).parent().find("#bEdit").show(), $(t).parent().find("#bElim").show(), $(t).parents("tr").attr("id", "")
}

function FijModoEdit(t) {
	$(t).parent().find("#bAcep").show(), $(t).parent().find("#bCanc").show(), $(t).parent().find("#bEdit").hide(), $(t).parent().find("#bElim").hide(), $(t).parents("tr").attr("id", "editing")
}

function ModoEdicion(t) {
	return "editing" == t.attr("id")
}

function rowAcep(t) {
	var n = $(t).parents("tr"),
		i = n.find("td");
	ModoEdicion(n) && (IterarCamposEdit(i, function (t) {
		var n = t.find("input").val();
		t.html(n)
	}), FijModoNormal(t), params.onEdit(n))
}

function rowCancel(t) {
	var n = $(t).parents("tr"),
		i = n.find("td");
	ModoEdicion(n) && (IterarCamposEdit(i, function (t) {
		var n = t.find("div").html();
		t.html(n)
	}), FijModoNormal(t))
}

function rowEdit(t) {
	var n = $(t).parents("tr"),
		i = n.find("td");
	ModoEdicion(n) || (IterarCamposEdit(i, function (t) {
		var n = t.html(),
			i = '<div style="display: none;">' + n + "</div>",
			o = '<input class="form-control input-sm" value="' + n + '">';
		t.html(i + o)
	}), FijModoEdit(t))
}

function rowElim(t) {
	$(t).parents("tr").remove(), params.onDelete()
}

function rowAgreg() {
	if (0 == $tab_en_edic.find("tbody tr").length) {
		var t = "";
		(i = $tab_en_edic.find("thead tr").find("th")).each(function () {
			"buttons" == $(this).attr("name") ? t += colEdicHtml : t += "<td></td>"
		}), $tab_en_edic.find("tbody").append("<tr>" + t + "</tr>")
	} else {
		var n = $tab_en_edic.find("tr:last");
		n.clone().appendTo(n.parent());
		var i = (n = $tab_en_edic.find("tr:last")).find("td");
		i.each(function () {
			"buttons" == $(this).attr("name") || $(this).html("")
		})
	}
}

function TableToCSV(t) {
	var n = "",
		i = "";
	return $tab_en_edic.find("tbody tr").each(function () {
		ModoEdicion($(this)) && $(this).find("#bAcep").click();
		var o = $(this).find("td");
		n = "", o.each(function () {
			"buttons" == $(this).attr("name") || (n = n + $(this).html() + t)
		}), "" != n && (n = n.substr(0, n.length - t.length)), i = i + n + "\n"
	}), i
}
var $tab_en_edic = null,
	params = null,
	colsEdi = null,
	newColHtml = '<div class="btn-group pull-right"><button id="bEdit" type="button" class="btn btn-sm btn-default" onclick="rowEdit(this);"><span class="glyphicon glyphicon-pencil" > </span></button><button id="bElim" type="button" class="btn btn-sm btn-default" onclick="rowElim(this);"><span class="glyphicon glyphicon-trash" > </span></button><button id="bAcep" type="button" class="btn btn-sm btn-default" style="display:none;" onclick="rowAcep(this);"><span class="glyphicon glyphicon-ok" > </span></button><button id="bCanc" type="button" class="btn btn-sm btn-default" style="display:none;" onclick="rowCancel(this);"><span class="glyphicon glyphicon-remove" > </span></button></div>',
	colEdicHtml = '<td name="buttons">' + newColHtml + "</td>";
$.fn.SetEditable = function (t) {
	var n = {
		columnsEd: null,
		$addButton: null,
		onEdit: function () {},
		onDelete: function () {},
		onAdd: function () {}
	};
	params = $.extend(n, t), this.find("thead tr").append('<th name="buttons"></th>'), this.find("tbody tr").append(colEdicHtml), $tab_en_edic = this, null != params.$addButton && params.$addButton.click(function () {
		rowAgreg()
	}), null != params.columnsEd && (colsEdi = params.columnsEd.split(","))
};

$('.makeEditable').SetEditable({ $addButton: $('#but_add')});


</script>
</html>
</div>
</body>
<script>
    let menuButton = document.querySelector(".button-menu");
let container = document.querySelector(".container");
let pageContent = document.querySelector(".content");
let responsiveBreakpoint = 991;

if (window.innerWidth <= responsiveBreakpoint) {

  container.classList.add("nav-closed");
}

menuButton.addEventListener("click", function () {
  container.classList.toggle("nav-closed");
});

pageContent.addEventListener("click", function () {
  if (window.innerWidth <= responsiveBreakpoint) {
    container.classList.add("nav-closed");
  }
});


window.addEventListener("resize", function () {
  if (window.innerWidth > responsiveBreakpoint) {
    container.classList.remove("nav-closed");
  }
});

    </script>