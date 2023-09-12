<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Add custom CSS styles -->
    <style>
        body {
            background-color: #1a1a1a;
            color: #5c6611;
        }

        .edit-form {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            background-color: #333;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
        }

        .edit-form label {
            font-weight: bold;
        }

        .edit-form input[type="text"],
        .edit-form input[type="number"],
        .edit-form input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
            background-color: #444;
            color: #5c6611;
        }

        .edit-form input[type="text"]:focus,
        .edit-form input[type="number"]:focus,
        .edit-form input[type="file"]:focus {
            outline: none;
            background-color: #555;
        }

        .edit-form button[type="submit"] {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: #5c6611;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .edit-form button[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Keyframe animation for the form */
        @keyframes slideInDown {
            0% { transform: translateY(-100%); }
            100% { transform: translateY(0); }
        }

        .slide-in {
            animation: slideInDown 0.5s forwards;
        }

        /* Hover effects */
        .edit-form input[type="text"]:hover,
        .edit-form input[type="number"]:hover,
        .edit-form input[type="file"]:hover {
            box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.3);
        }

        .edit-form button[type="submit"]:hover {
            box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.3);
        }

        /* After/Before effects */
        .edit-form::before,
        .edit-form::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .edit-form::before {
            background-image: linear-gradient(135deg, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0) 100%);
        }

        .edit-form::after {
            background-image: linear-gradient(315deg, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0) 100%);
        }
    </style>
</head>
<body>
    <div class="edit-form slide-in">
        <h2>Edit Banner</h2>
        <form action="{{ route('banners.update', $banners->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">banner badge:</label>
                <input type="text" name="badge" value="  {{$banners -> badge}}"   id="name" required>
            </div>

            <div class="form-group">
                <label for="price">banner Description:</label>
                <input type="text" name="description" id="description" value="  {{$banners -> description}}" required>
            </div>

            <div class="form-group">
                <label for="image">Product Image:</label>
                <input type="file" name="img" id="img"  value="  {{$banners -> img}}">
            </div>
            <button type="submit">Update</button>
        </form>
    </div>

</body>
</html>
