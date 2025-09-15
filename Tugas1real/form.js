        const tombol = document.getElementById('btn')
        const hasil = document.getElementById('hasil')

        tombol.onclick = () => hasil.textContent = "Event : Button di Klik"
        tombol.style.color = 'purple'