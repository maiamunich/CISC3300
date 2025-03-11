<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Note Manager</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .error {
            color: red;
            margin-bottom: 10px;
        }
        .success {
            color: green;
            margin-bottom: 10px;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        textarea {
            width: 300px;
            height: 100px;
        }
    </style>
</head>
<body>
    <h1>Create New Note</h1>

    <?php if (isset($error)): ?>
        <div class="error"><?php echo $error; ?></div>
    <?php endif; ?>

    <?php if (isset($success)): ?>
        <div class="success"><?php echo $success; ?></div>
    <?php endif; ?>

    <form method="POST" action="">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="<?php echo isset($title) ? htmlspecialchars($title) : ''; ?>">

        <label for="description">Description:</label>
        <textarea id="description" name="description"><?php echo isset($description) ? htmlspecialchars($description) : ''; ?></textarea>

        <br><br>
        <input type="submit" value="Create Note">
    </form>
</body>
</html> 