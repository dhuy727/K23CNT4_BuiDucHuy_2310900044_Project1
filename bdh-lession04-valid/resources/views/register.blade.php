<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bùi Đức Huy - Registration Form</title>
</head>
<body>
    <h1>Registration Form</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: red;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('register.submit') }}">
        @csrf

        <label for="userid">User ID:</label>
        <input type="text" name="userid" value="{{ old('userid') }}">
        <br>

        <label for="password">Password:</label>
        <input type="password" name="password">
        <br>

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ old('name') }}">
        <br>

        <label for="address">Address:</label>
        <input type="text" name="address" value="{{ old('address') }}">
        <br>

        <label for="country">Country:</label>
        <select name="country">
            <option value="">Please select a country</option>
            <option value="USA" {{ old('country') == 'USA' ? 'selected' : '' }}>USA</option>
            <option value="Canada" {{ old('country') == 'Canada' ? 'selected' : '' }}>Canada</option>
        </select>
        <br>

        <label for="zipcode">ZIP Code:</label>
        <input type="text" name="zipcode" value="{{ old('zipcode') }}">
        <br>

        <label for="email">Email:</label>
        <input type="text" name="email" value="{{ old('email') }}">
        <br>

        <label for="sex">Sex:</label>
        <input type="radio" name="sex" value="male" {{ old('sex') == 'male' ? 'checked' : '' }}> Male
        <input type="radio" name="sex" value="female" {{ old('sex') == 'female' ? 'checked' : '' }}> Female
        <br>

        <label for="language">Language:</label>
        <input type="checkbox" name="language[]" value="English" {{ is_array(old('language')) && in_array('English', old('language')) ? 'checked' : '' }}> English
        <input type="checkbox" name="language[]" value="Non English" {{ is_array(old('language')) && in_array('Non English', old('language')) ? 'checked' : '' }}> Non English
        <br>

        <label for="about">About:</label>
        <textarea name="about">{{ old('about') }}</textarea>
        <br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
