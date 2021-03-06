<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
		<link rel="stylesheet" href="./assets/css/styles.css" />
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

		<title>Dashboard</title>
	</head>
	<body>
		<!-- SideBar -->
		<section id="menu">
			<div class="logo">
				<img src="./assets/imgs/stock.png" alt="logo" />
				<h2>Dashboard</h2>
			</div>

			<div class="items">
				<li>
					<i class="fas fa-chart-pie"></i>
					<a href="index.html">Dashboard</a>
				</li>
				<li>
					<i class="fab fa-uikit"></i>
					<a href="index.html">Users</a>
				</li>
				<li>
					<i class="fas fa-th-large"></i>
					<a href="products.html">Products</a>
				</li>
				<li>
					<i class="fas fa-edit"></i>
					<a href="sales.html">Sales</a>
				</li>
				<li>
					<i class="fab fa-cc-visa"></i>
					<a href="add_product.html">Add Products</a>
				</li>
				<li>
					<i class="fas fa-hamburger"></i>
					<a href="contact.html">Contact</a>
				</li>
				<li>
					<i class="fas fa-chart-line"></i>
					<a href="help.html">Help</a>
				</li>
			</div>
		</section>

		<!-- Interface -->
		<section id="interface">
			<div class="navigation">
				<!-- Search -->
				<div class="n1">
					<div id="menu-btn">
						<i class="fas fa-bars"></i>
					</div>
					<div class="search">
						<i class="fas fa-search"></i>
						<form action="">
							<input type="text" placeholder="Search" />
						</form>
					</div>
				</div>

				<!-- Profile -->
				<div class="profile">
					<i class="far fa-bell"></i>
					<img src="./assets/imgs/avatarGau.jpeg" alt="avatar" />
				</div>
			</div>

			<!-- Title -->
			<h3 class="i-name">Dashboard</h3>

			<!-- Card -->
			<div class="values">
				<div class="val-box">
					<i class="fas fa-users"></i>
					<div>
						<h3>8000</h3>
						<span>Users</span>
					</div>
				</div>
				<div class="val-box">
					<i class="fas fa-shopping-cart"></i>
					<div>
						<h3>8000</h3>
						<span>Products</span>
					</div>
				</div>
				<div class="val-box">
					<i class="fas fa-crown"></i>
					<div>
						<h3>8000</h3>
						<span>Sold</span>
					</div>
				</div>
				<div class="val-box">
					<i class="fas fa-dollar-sign"></i>
					<div>
						<h3>5,255</h3>
						<span>Coin</span>
					</div>
				</div>
			</div>

			<!-- Table -->

			<div class="board">
				<table width="100%">
					<thead>
						<tr>
							<td>Name</td>
							<td>Title</td>
							<td>Status</td>
							<td>Role</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="people">
								<p><img src="./assets/imgs/avatarGau.jpeg" alt="" /></p>
								<div class="people-description">
									<h5>Hohn</h5>
									<p>hohn@gmail.com</p>
								</div>
							</td>
							<td class="people-des">
								<h5>Software engineer</h5>
								<p>Web developer</p>
							</td>
							<td class="active">
								<p>Active</p>
							</td>
							<td class="role">
								<p>employee</p>
							</td>
							<td class="edit">
								<p><a href="#">Edit</a></p>
							</td>
						</tr>
						<tr>
							<td class="people">
								<p><img src="./assets/imgs/avatarGau.jpeg" alt="" /></p>
								<div class="people-description">
									<h5>An Ti??m</h5>
									<p>antiem@gmail.com</p>
								</div>
							</td>
							<td class="people-des">
								<h5>Software engineer</h5>
								<p>Web developer</p>
							</td>
							<td class="active">
								<p>Active</p>
							</td>
							<td class="role">
								<p>employee</p>
							</td>
							<td class="edit">
								<p><a href="#">Edit</a></p>
							</td>
						</tr>
						<tr>
							<td class="people">
								<p><img src="./assets/imgs/avatarGau.jpeg" alt="" /></p>
								<div class="people-description">
									<h5>Mark Cuban</h5>
									<p>cuban@gmail.com</p>
								</div>
							</td>
							<td class="people-des">
								<h5>Software engineer</h5>
								<p>Web developer</p>
							</td>
							<td class="active">
								<p>Active</p>
							</td>
							<td class="role">
								<p>employee</p>
							</td>
							<td class="edit">
								<p><a href="#">Edit</a></p>
							</td>
						</tr>
						<tr>
							<td class="people">
								<p><img src="./assets/imgs/avatarGau.jpeg" alt="" /></p>
								<div class="people-description">
									<h5>Buffet</h5>
									<p>Buffet@gmail.com</p>
								</div>
							</td>
							<td class="people-des">
								<h5>Software engineer</h5>
								<p>Web developer</p>
							</td>
							<td class="active">
								<p>Active</p>
							</td>
							<td class="role">
								<p>employee</p>
							</td>
							<td class="edit">
								<p><a href="#">Edit</a></p>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</section>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		<script>
			$("#menu-btn").click(function () {
				$("#menu").toggleClass("active");
			});
		</script>
	</body>
</html>
