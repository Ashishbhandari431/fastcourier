<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select All Checkboxes</title>
</head>
<body>
    <form id="fruitForm">
        <table>
            <tr>
                <td><input type="checkbox" id="selectAll" onclick="toggleSelectAll()"> Select All</td>
            </tr>
            <!-- Assuming these are dynamically generated rows from your database -->
            <tr>
                <td><input type="checkbox" class="items" value="1001"> Banana</td>
                <td>value 1</td>
            </tr>
            <tr>
                <td><input type="checkbox" class="items" value="1002"> Apple</td>
                <td>value 2</td>
            </tr>
            <!-- Add more rows as needed -->
        </table>
        <button type="button" onclick="displaySelectedItems()">Display Selected Items</button>
    </form>

    <script>
        function toggleSelectAll() {
            const selectAllCheckbox = document.getElementById('selectAll');
            const checkboxes = document.querySelectorAll('.items');
            
            checkboxes.forEach(checkbox => {
                checkbox.checked = selectAllCheckbox.checked;
            });
        }

        function displaySelectedItems() {
            const checkboxes = document.querySelectorAll('.items');
            let selectedItems = [];

            checkboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    selectedItems.push(checkbox.value); // Use the CN No directly
                }
            });

            if (selectedItems.length > 0) {
                // Create query string from selected items
                const queryString = `cn_numbers=${selectedItems.join(',')}`;
                
                // Redirect to invoice.php with the query string
                window.location.href = 'qr.php?' + queryString;
            } else {
                alert('No items selected!');
            }
        }
    </script>
</body>
</html>
