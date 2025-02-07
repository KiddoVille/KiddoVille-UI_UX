<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Package</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="<?= CSS ?>/Manager/component.css?v=<?= time() ?>">
    <link rel="icon" href="<?= IMAGE ?>/KIDDOVILLE_LOGO.jpg">
</head>
<body>
    <div class="addcontainer">
        <h1>Create Package</h1>
        <form id="packageForm" method="post">
            
            <!-- Package name -->
            <label for="package-name">Package Name <span class="required">*</span></label>
            <input type="text" class="opt" name="name" placeholder="Enter package name" 
                value="<?= htmlspecialchars($data['values']['name'] ?? '') ?>" required>
            <?php if (!empty($data['errors']['name'])): ?>
                <p class="error"><?= $data['errors']['name'] ?></p>
            <?php endif; ?>

            <!-- Included services -->
            <label for="included-services">Included Services <span class="required">*</span></label>
            <textarea name="services" id="included-services" class="services" placeholder="List included services" required><?= htmlspecialchars($data['values']['services'] ?? '') ?></textarea>
            <?php if (!empty($data['errors']['services'])): ?>
                <p class="error"><?= $data['errors']['services'] ?></p>
            <?php endif; ?>

            <!-- Price -->
            <label for="price">Price <span class="required">*</span></label>
            <input type="number" id="price" name="price" value="<?= htmlspecialchars($data['values']['price'] ?? '80000') ?>" required>
            <?php if (!empty($data['errors']['price'])): ?>
                <p class="error"><?= $data['errors']['price'] ?></p>
            <?php endif; ?>

            <!-- Days -->
            <label for="days">Select Applicable Days <span class="required">*</span></label>
            <div class="checkbox-group">
                <?php
                $daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
                $selectedDays = $data['values']['days'] ?? [];
                foreach ($daysOfWeek as $day):
                ?>
                    <label>
                        <input type="checkbox" name="days[]" value="<?= $day ?>" <?= in_array($day, $selectedDays) ? 'checked' : '' ?>> <?= $day ?>
                    </label>
                <?php endforeach; ?>
            </div>
            <?php if (!empty($data['errors']['days'])): ?>
                <p class="error"><?= $data['errors']['days'] ?></p>
            <?php endif; ?>

            <!-- Submit button -->
            <div class="buttons">
                <button type="submit" class="publish">Publish</button>
                <a href="<?=ROOT?>/Manager/Home" class="cancel">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
