<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>League of Legends Characters</title>
</head>
<body>
    <h1>League of Legends Characters</h1>
    <ul>
        @foreach ($characters as $character)
            <li>
                <strong>{{ $character->name }}</strong> 
                ({{ $character->role }} - {{ $character->region }})
                <p>{{ $character->lore }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>
