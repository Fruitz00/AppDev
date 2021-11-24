<?php include 'adminheader.php'?>
<body>
    <div class="head">
        <h1>Products</h1>
    </div>
    <div class="vl">
		
	</div>
    <nav class="navbar navbar-fixed-left navbar-minimal animate" role="navigation">
		<div class="navbar-toggler animate">
        <script src="nav.js"></script>
			<span class="menu-icon"></span>
		</div>
		<ul class="navbar-menu animate">
			<li>
				<a href="admin.php" class="animate">
					<span class="desc animate"> Accounts </span>
					<span class="glyphicon glyphicon-user"></span>
				</a>
			</li>
			<li>
				<a href="manage.php" class="animate">
					<span class="desc animate"> Manage Product </span>
					<span class="glyphicon glyphicon-info-sign"></span>
				</a>
			</li>
			<li>
				<a href="orders.php" class="animate">
					<span class="desc animate"> Order List</span>
					<span class="glyphicon glyphicon-comment"></span>
				</a>
			</li>
		</ul>
	</nav>
    
    <!-- Db needed to display all columns -->
	<div class="disptable">
		<table>
			<tr>
				<td> Product ID </td>
				<td> Details </td>
			</tr>
		</table>	
	</div>

</body>
</html>