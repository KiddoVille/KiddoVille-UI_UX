<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package Details</title>
    <link rel="icon" href="../Assets/KIDDOVILLE_LOGO.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="<?= CSS ?>/Manager/component.css" />
</head>

<body>
    <div class="container" style="height: 400px;border:aqua 4px solid">
        <h1>Package Details</h1>

        <!-- Display Package Name -->
        <label for="package-name">Package Name <span class="required">*</span></label>
        <input type="text" id="package-name" value="<?= htmlspecialchars($data['package'][0]->name ?? '') ?>" readonly>
        <!-- Display Included Services -->
        <label for="included-services">Included Services <span class="required">*</span></label>
        <div class="services">
            <input type="text" id="package-services" value="<?= htmlspecialchars($data['package'][0]->services ?? '') ?>" readonly>
        </div>

        <!-- Display Price -->
        <label for="price">Price <span class="required">*</span></label>
        <input type="number" id="price" value="<?= htmlspecialchars($data['package'][0]->price ?? '') ?>" readonly>

        <!-- Display Days-->
        <!-- <label for="day">days<span class="required">*</span></label>
        <input type="number" id="price" value="<?= htmlspecialchars($data['package'][0]->days ?? '') ?>" readonly> -->

        <!-- Back Button -->
        <!-- Back Button -->
        <div class="buttons">
            <a href="#"><button class="back" onclick="history.back();">Back</button></a>
            <button class="back" onclick="window.location.href='<?= ROOT ?>/Manager/Editview/<?=$data['package'][0]->id ?>'">Update</button>
        </div>

    </div>
</body>

</html>