$(document).ready(function() {
    function fetchQueueData() {
        $.ajax({
            url: 'patientoverview.php', // The PHP file URL
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                var tableBody = $('#queueTable tbody');
                tableBody.empty(); // Clear existing table rows

                // Loop through the data and populate the table
                $.each(data, function(index, row) {
                    var status = (row.Prioritization === 'Senior' || row.Prioritization === 'PWD' || row.Prioritization === 'Pregnant') ? 'Serving' : 'Waiting';
                    var rowHtml = `
                        <tr>
                            <td>${row.Service}</td>
                            <td>${row.TicketNum}</td>
                            <td>${row.Prioritization}</td>
                            <td>${status}</td>
                            <td class="cursor-pointer">
                                <button class="cursor-pointer deleteQueue" data-id="${row.TicketNum}">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>`;
                    
                    tableBody.append(rowHtml);
                });
            },
            error: function(xhr, status, error) {
                console.error("Error fetching data: ", status, error);
            }
        });
    }

    // Fetch data every 1 seconds (1000 ms)
    setInterval(fetchQueueData, 1000);
    
    // Fetch data when the page loads
    fetchQueueData();
    
});
