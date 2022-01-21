<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload Form</title>
</head>
<body>

<h3>Your file was successfully uploaded!</h3>

<ul>
    <li>name: <?= esc($uploaded_flleinfo->getBasename()) ?></li>
    <li>size: <?= esc($uploaded_flleinfo->getSizeByUnit('kb')) ?> KB</li>
</ul>

<p><?= anchor('upload', 'Upload Another File!') ?></p>
<p><?= anchor('viewimages', 'View uploaded Images') ?></p>

</body>
</html>