<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Package</title>
    <link rel="icon" href="../Assets/KIDDOVILLE_LOGO.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="<?= CSS ?>/Manager/component.css" />
</head>
<body>
    <div class="container" style="height: 400px; border: aqua 4px solid;">
        <h1>Update Package</h1>

        <!-- Update Form -->
         <!-- <?php
            //var_dump($package);
         ?> -->

        <form action="<?= ROOT ?>/Manager/Editview/<?= htmlspecialchars($package[0]->id ?? '') ?>" method="POST">
            
            <input type="hidden" name="id" value="<?= htmlspecialchars($package[0]->id ?? '') ?>">

            <!-- Package Name -->
            <label for="package-name">Package Name <span class="required">*</span></label>
            <input type="text" id="package-name" name="name" value="<?= htmlspecialchars($package[0]->name ?? '') ?>" required>
            <?php if (!empty($data['errors']['name'])): ?>
                <p style="color:red;margin-top:-5px" class="error"><?= $data['errors']['name'] ?></p>
            <?php endif; ?>

            <!-- Included Services -->
            <label for="included-services">Included Services <span class="required">*</span></label>
            <textarea id="package-services" class="services" style="width: 375px; margin-left: 2px;" name="services" required><?= htmlspecialchars($package[0]->services ?? '') ?></textarea>
            <?php if (!empty($data['errors']['services'])): ?>
                <p style="color:red;margin-top:-5px" class="error"><?= $data['errors']['services'] ?></p>
            <?php endif; ?>

            <!-- Price -->
            <label for="price">Price <span class="required">*</span></label>
            <input type="number" id="price" name="price" value="<?= htmlspecialchars($package[0]->price ?? '') ?>" required>
            <?php if (!empty($data['errors']['price'])): ?>
                <p style="color:red;margin-top:-5px" class="error"><?= $data['errors']['price'] ?></p>
            <?php endif; ?>

            <!-- Buttons -->
            <div class="buttons">
                <button type="button" class="back" onclick="history.back();">Back</button>
                <button type="submit" class="back" >Save</button>
            </div>
        </form>
    </div>
</body>
</html>
