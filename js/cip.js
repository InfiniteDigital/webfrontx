async function getIP() {
    let ip = await fetch(`https://ipinfo.io/ip`).then(response => response.text())
        .then(data => {
            return data;
        });
    return ip;
}