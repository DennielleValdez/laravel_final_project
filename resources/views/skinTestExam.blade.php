<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skin Type Test</title>
</head>
<body>
    <h1>Skin Type Test</h1>
    <form action="{{ route('skinTestExam.store') }}" method="POST">
        @csrf
        <div>
            <label for="q1">How does your skin feel immediately after cleansing?</label>
            <select name="q1" id="q1" required>
                <option value="">Select</option>
                <option value="Tight and dry">Tight and dry</option>
                <option value="Soft and smooth">Soft and smooth</option>
                <option value="Shiny and greasy">Shiny and greasy</option>
            </select>
        </div>
        <div>
            <label for="q2">How often do you experience breakouts or acne?</label>
            <select name="q2" id="q2" required>
                <option value="">Select</option>
                <option value="Rarely">Rarely</option>
                <option value="Occasionally">Occasionally</option>
                <option value="Frequently">Frequently</option>
            </select>
        </div>
        <div>
            <label for="q3">How does your skin react to sun exposure?</label>
            <select name="q3" id="q3" required>
                <option value="">Select</option>
                <option value="Burns easily and feels sensitive">Burns easily and feels sensitive</option>
                <option value="Tans evenly without burning">Tans evenly without burning</option>
                <option value="Gets very oily and prone to breakouts">Gets very oily and prone to breakouts</option>
            </select>
        </div>
        <div>
            <label for="q4">How does your skin look and feel by midday?</label>
            <select name="q4" id="q4" required>
                <option value="">Select</option>
                <option value="Dry and flaky">Dry and flaky</option>
                <option value="Balanced and smooth">Balanced and smooth</option>
                <option value="Shiny and oily">Shiny and oily</option>
            </select>
        </div>
        <div>
            <label for="q5">How visible are your pores?</label>
            <select name="q5" id="q5" required>
                <option value="">Select</option>
                <option value="Hardly visible">Hardly visible</option>
                <option value="Moderately visible">Moderately visible</option>
                <option value="Very visible and large">Very visible and large</option>
            </select>
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>