<?php
include('connection.php');

	if (isset($_POST['gotlandsKnapp']))
	{
		session_start();
		$_SESSION['gotland'] = 'gotland';
		header("Location: ../startsidaNation.php");
	}
	
	else if (isset($_POST['ghKnapp']))
	{
		session_start();
		$_SESSION['gh'] = 'gh';
		header("Location: ../startsidaNation.php");
	}
	
	else if (isset($_POST['gbgKnapp']))
	{
		session_start();
		$_SESSION['gbg'] = 'gbg';
		header("Location: ../startsidaNation.php");
	}
	
	else if (isset($_POST['kalmarsKnapp']))
	{
		session_start();
		$_SESSION['kalmar'] = 'kalmar';
		header("Location: ../startsidaNation.php");
	}
	
	else if (isset($_POST['norrlandsKnapp']))
	{
		session_start();
		$_SESSION['norrland'] = 'norrland';
		header("Location: ../startsidaNation.php");
	}
	
	else if (isset($_POST['smalandsKnapp']))
	{
		session_start();
		$_SESSION['smaland'] = 'smaland';
		header("Location: ../startsidaNation.php");
	}
	
	else if (isset($_POST['stockenKnapp']))
	{
		session_start();
		$_SESSION['stocken'] = 'stocken';
		header("Location: ../startsidaNation.php");
	}
	
	else if (isset($_POST['snerikesKnapp']))
	{
		session_start();
		$_SESSION['snerike'] = 'snerike';
		header("Location: ../startsidaNation.php");
	}
	
	else if (isset($_POST['uplandsKnapp']))
	{
		session_start();
		$_SESSION['upland'] = 'upland';
		header("Location: ../startsidaNation.php");
	}
	
	else if (isset($_POST['varmlandsKnapp']))
	{
		session_start();
		$_SESSION['varmland'] = 'varmland';
		header("Location: ../startsidaNation.php");
	}
	
	else if (isset($_POST['vgKnapp']))
	{
		session_start();
		$_SESSION['vg'] = 'vg';
		header("Location: ../startsidaNation.php");
	}
	
	else if (isset($_POST['vdalaKnapp']))
	{
		session_start();
		$_SESSION['vdala'] = 'vdala';
		header("Location: ../startsidaNation.php");
	}
	
	else if (isset($_POST['ogKnapp']))
	{
		session_start();
		$_SESSION['og'] = 'og';
		header("Location: ../startsidaNation.php");
	}