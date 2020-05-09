<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Admin - Hamptons Yacht Charters</title>

<!-- Custom fonts for this template-->
<link href="{{ asset('/admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel='stylesheet' href='https://unpkg.com/formiojs@latest/dist/formio.full.min.css'>
<!--<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />-->
<link rel="stylesheet" href="{{ asset('/admin/css/jquery-ui.css') }}" />

<!-- Custom styles for this template-->
<link href="{{ asset('/admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

<!--Custom CSS for multiselect-->
<style type="text/css">
	button.multiselect{
		display: block;
	    width: 100%;
	    height: calc(1.5em + .75rem + 2px);
	    padding: .375rem .75rem;
	    font-size: 1rem;
	    font-weight: 400;
	    line-height: 1.5;
	    color: #6e707e;
	    background-color: #fff;
	    background-clip: padding-box;
	    border: 1px solid #d1d3e2;
	    border-radius: .35rem;
	    overflow: hidden;
	}
	button.multiselect:focus{
		color: #6e707e;
		background-color: #fff;
		border-color: #bac8f3;
		outline: 0;
		-webkit-box-shadow: 0 0 0 0.2rem rgba(78,115,223,.25);
		box-shadow: 0 0 0 0.2rem rgba(78,115,223,.25);
	}
	ul.multiselect-container {
		padding: 10px;
	}
	
	/* User role page CSS */
	/* The container */
	.module-options {
	  display: block;
	  position: relative;
	  padding-left: 35px;
	  margin-bottom: 12px;
	  cursor: pointer;
	  font-size: 22px;
	  -webkit-user-select: none;
	  -moz-user-select: none;
	  -ms-user-select: none;
	  user-select: none;
	}

	/* Hide the browser's default checkbox */
	.module-options input {
	  position: absolute;
	  opacity: 0;
	  cursor: pointer;
	  height: 0;
	  width: 0;
	}

	/* Create a custom checkbox */
	.checkmark {
	  position: absolute;
	  top: 0;
	  left: 0;
	  height: 25px;
	  width: 25px;
	  background-color: #eee;
	}

	/* On mouse-over, add a grey background color */
	.module-options:hover input ~ .checkmark {
	  background-color: #ccc;
	}

	/* When the checkbox is checked, add a blue background */
	.module-options input:checked ~ .checkmark {
	  background-color: #2196F3;
	}

	/* Create the checkmark/indicator (hidden when not checked) */
	.checkmark:after {
	  content: "";
	  position: absolute;
	  display: none;
	}

	/* Show the checkmark when checked */
	.module-options input:checked ~ .checkmark:after {
	  display: block;
	}

	/* Style the checkmark/indicator */
	.module-options .checkmark:after {
	  left: 9px;
	  top: 7px;
	  width: 6px;
	  height: 11px;
	  border: solid white;
	  border-width: 0 3px 3px 0;
	  -webkit-transform: rotate(45deg);
	  -ms-transform: rotate(45deg);
	  transform: rotate(45deg);
	}
	.formbuilder .btn-block{
		display: inline-block;
	}
	.seo-tools .card-header{
		background: #222;
		color: #fff;
	}
	.seo-tools .card-body{
		background: #e6e6e6;
	}

	/* Media queries */
	@media (max-width: 480px) {
		.rolesList .card-title .roleName {
			display: block;
		}
		.rolesList .card-title .btn{
			margin-top:5px;
			margin-bottom:5px;
		}
	}

</style>