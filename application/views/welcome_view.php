<!DOCTYPE html>
<html>
<head>
<title>.::CleverCode::.</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<link rel="stylesheet" href="assets/css/jQuery-mobile.css"/>
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script	src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head>
<body>
	<div data-role="page" data-theme="a" class="type-home">
		<div data-role="content">
			<div class="content-secondary">
				<div style="text-align: center;"><img src="assets/images/logo_500.png" alt="CleverCode" width="200" height="200" style="" /></div>
				<p>
				<ul data-role="listview" data-inset="true" data-theme="a" data-dividertheme="a">
					<li data-role="list-divider">Projetos</li>
					<li><a href="docs/about/intro.html">Projetos Ativos</a></li>
					<li><a href="docs/about/getting-started.html">Projetos Inativos</a></li>
					<li><a href="docs/about/features.html">Projetos Cancelados</a></li>
					<li><a href="docs/about/accessibility.html">Projetos Finalizados</a></li>
					<li><a href="docs/about/platforms.html">Supported platforms</a></li>
				</ul>
				</p>
			</div>
			<div class="content-primary">
				<ul data-role="listview" data-inset="true" data-theme="a" data-dividertheme="a">
					<li data-role="list-divider">Tasks</li>
					<li><a href="docs/pages/index.html">Atrazadas</a></li>
					<li><a href="docs/pages/index.html">Em Execução</a></li>
					<li><a href="docs/pages/index.html">Concluídas</a></li>
										
					<li data-role="list-divider">Finaiceiro</li>
					<li><a href="docs/pages/index.html">Receitas</a></li>
					<li><a href="docs/toolbars/index.html">Despesas</a></li>
					<li><a href="docs/buttons/index.html">Balanço Geral</a></li>

					<li data-role="list-divider">CMS</li>
					<li><a href="<?php echo(site_url('/sist/clientes_list')); ?>">Clientes</a></li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>
