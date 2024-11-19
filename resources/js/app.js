import './bootstrap';
function fetchDeviceStatus() {
    fetch('/api/status')
        .then(response => response.json())
        .then(data => {
            document.getElementById('status').innerText = `Status: ${data.status} (Last Updated: ${data.last_updated})`;
        })
        .catch(error => {
            console.error('Error fetching status:', error);
        });
}

// Run on page load
document.addEventListener('DOMContentLoaded', () => {
    setInterval(fetchDeviceStatus, 5000);
    fetchDeviceStatus();
});
