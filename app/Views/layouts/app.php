<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="The small framework with powerful features">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	<title>Welcome to my simple auth in CI4</title>
</head>
<body>
    <?= $this->include('components/navbar') ?>
    <main><?= $this->renderSection('content') ?></main>
    <?= $this->include('components/footer') ?>
</body>
</html>