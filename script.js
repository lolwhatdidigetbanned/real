document.addEventListener('DOMContentLoaded', () => {
    fetchVideos();
});

async function fetchVideos() {
    const videosList = document.getElementById('videosList');
    videosList.innerHTML = '';

    const response = await fetch('get_videos.php');
    const videos = await response.json();

    videos.forEach(video => {
        const videoCard = document.createElement('div');
        videoCard.classList.add('video-card');
        videoCard.innerHTML = `
            <video width="320" height="240" controls>
                <source src="uploads/${video.filename}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <p>${video.title}</p>
        `;
        videosList.appendChild(videoCard);
    });
}
