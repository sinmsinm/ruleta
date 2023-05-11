document.addEventListener("DOMContentLoaded", function() {
    var wheel = document.getElementById('wheel');
    var segments = Array.from(document.getElementsByClassName('segment'));

    document.getElementById('spin').addEventListener('click', function() {
        // Randomly select a segment
        var selectedSegment = segments[Math.floor(Math.random() * segments.length)];

        // Calculate the rotation needed to center the selected segment at the top
        var rotation = 360 - selectedSegment.dataset.angle + 90;

        // Apply the rotation to the wheel
        wheel.style.transform = 'rotate(' + rotation + 'deg)';
    });
});
