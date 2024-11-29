<!DOCTYPE html>
<html>

<head>
    <title>Create Package</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="<?= CSS ?>/Manager/component.css" />
    <link rel="icon" href="<?= IMAGE ?>/KIDDOVILLE_LOGO.jpg">
    <style>
        .services {
            width: 380px;
            height: 60px;
        }

        .checkbox-group {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: space-between;
            max-width: 500px;
        }

        .checkbox-group label {
            flex: 1 1 calc(33.33% - 10px);
            text-align: left;
            display: flex;
            align-items: center;
            margin: 5px 0;
        }

        @media (max-width: 768px) {
            .checkbox-group label {
                flex: 1 1 calc(50% - 10px);
            }
        }

        .error {
            color: red;
            font-size: 14px;
            font-weight: bold;
            margin-top: -15px;
            margin-left: 0;
            padding-left: 5px;
            display: block;
        }
    </style>
</head>

<body>
    <div class="container" style ="height:520px;">
        <h1>Create Package</h1>
        <form id="packageForm" method="post">
            <!-- Package name -->
            <label for="package-name">Package name <span class="required">*</span></label>
            <input type="text" class="opt" name="name" value="<?= htmlspecialchars($data['values']['name'] ?? '') ?>" required style="height: 20px;">
            <?php if (!empty($data['errors']['name'])): ?>
                <p style="" class="error"><?= $data['errors']['name'] ?></p>
            <?php endif; ?>

            <!-- Included services -->
            <label for="included-services">Included services <span class="required">*</span></label>
            <textarea name="services" id="included-services" class="services" required><?= htmlspecialchars($data['values']['services'] ?? '') ?></textarea>
            <?php if (!empty($data['errors']['services'])): ?>
                <p class="error"><?= $data['errors']['services'] ?></p>
            <?php endif; ?>

            <!-- Price -->
            <label for="price">Price <span class="required">*</span></label>
            <input type="number" id="price" value="<?= htmlspecialchars($data['values']['price'] ?? '80000') ?>" name="price" required>
            <?php if (!empty($data['errors']['price'])): ?>
                <p class="error"><?= $data['errors']['price'] ?></p>
            <?php endif; ?>

            <!-- Days -->
            <label for="days">Select the applicable days <span class="required">*</span></label>
            <div id="days" class="checkbox-group">
                <?php
                $daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
                $selectedDays = isset($data['values']['days']) ? $data['values']['days'] : [];
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
            </div>
        </form>

        <!-- Cancel button -->
        <div class="buttons" style="margin-left: 280px; margin-top: -35px;">
            <a href="view-package.html"><button type="button" class="cancel">Cancel</button></a>
        </div>
    </div>
</body>

</html>  