<!DOCTYPE html>
<html lang="en">
<head>
   <title>Uploaded Images</title>
</head>
<body>
    <p><?= anchor('upload', 'Upload File') ?></p>

    <?php foreach ($result->getResult() as $image) :
        //$file = $this->request->getFile($image->Title); 
    ?>
        <div>
            <a target="_blank" href="<?php echo base_url($image->FileName); ?>">
                <img height="100px" width="100px" src="<?php echo base_url($image->FileName); ?>" title="<?php echo $image->Title ?>">
            </a>
            <div><?php echo $image->Title ?></div>
        </div>
    <?php endforeach; ?>
</body>
</html>