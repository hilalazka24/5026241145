<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESTEH INDONESIA | Linktree</title>
    <style>
        body {
            background-color: #1E2330;
            margin: 0;
            display: flex;
            justify-content: center;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        }

        /* KOTAK UTAMA DENGAN GRADASI DAN SUDUT BULAT */
        .profile-wrapper {
            width: 100%;
            max-width: 580px;
            min-height: 100vh;
            background: linear-gradient(180deg, #7F8B99 0%, #1E2330 100%);
            border-radius: 32px 32px 0 0; /* Sudut membulat atas */
            margin-top: 40px;
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
            box-shadow: 0px 10px 40px rgba(0,0,0,0.4);
        }

        /* BARIS IKON ATAS */
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
            padding: 0 10px;
        }

        .icon-circle {
            background: rgba(255, 255, 255, 0.7);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: #1E2330;
        }

        .right-icons {
            display: flex;
            gap: 12px;
        }

        /* KONTEN PROFIL */
        .avatar {
            width: 96px;
            height: 96px;
            background: white;
            border-radius: 50%;
            margin: 0 auto 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .avatar img {
            width: 80%;
        }

        h1 {
            color: white;
            font-size: 20px;
            font-weight: 700;
            margin: 0 0 8px;
            letter-spacing: -0.5px;
        }

        .desc {
            color: white;
            font-size: 15px;
            margin-bottom: 32px;
            opacity: 0.9;
        }

        /* TOMBOL LINK */
        .link-item {
            display: block;
            border: 1px solid white;
            border-radius: 30px;
            padding: 16px 20px;
            margin-bottom: 14px;
            color: white;
            text-decoration: none;
            font-weight: 500;
            font-size: 16px;
            transition: all 0.2s ease;
        }

        .link-item:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: scale(1.01);
        }
    </style>
</head>
<body>

    <div class="profile-wrapper">
        <div class="top-bar">
            <div class="icon-circle">
                <svg viewBox="0 0 28 28" width="18" height="18" fill="currentColor"><path d="m15.7603 6.829 4.6725-4.80317 2.712 2.77734-4.9012 4.67248h6.8944v3.85565h-6.9271l4.9339 4.7922-2.712 2.7229-6.6983-6.731-6.69829 6.731-2.712-2.712 4.93387-4.7923h-6.92703v-3.86645h6.89436l-4.9012-4.67248 2.712-2.77734 4.67249 4.80317v-6.829h4.0516zm-4.0516 12.0243h4.0516v9.1489h-4.0516z"></path></svg>
            </div>

            <div class="right-icons">
                <div class="icon-circle">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 256 256"><path d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216ZM48,184c7.7-13.24,16-43.92,16-80a64,64,0,1,1,128,0c0,36.05,8.28,66.73,16,80Z"></path></svg>
                </div>
                <div class="icon-circle">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 256 256"><path d="M216,112v96a16,16,0,0,1-16,16H56a16,16,0,0,1-16-16V112A16,16,0,0,1,56,96H80a8,8,0,0,1,0,16H56v96H200V112H176a8,8,0,0,1,0-16h24A16,16,0,0,1,216,112ZM93.66,69.66,120,43.31V136a8,8,0,0,0,16,0V43.31l26.34,26.35a8,8,0,0,0,11.32-11.32l-40-40a8,8,0,0,0-11.32,0l-40,40A8,8,0,0,0,93.66,69.66Z"></path></svg>
                </div>
            </div>
        </div>

        <div class="avatar">
            <img src="https://ugc.production.linktr.ee/Wu8mVHyHR9arCimWk1s7_oOJ88SAzm20GFBvF?io=true&size=avatar-v3_0" alt="Logo">
        </div>

        <h1>ESTEH INDONESIA</h1>
        <p class="desc">Kunjungi Kami diberbagai PLatfrom</p>

        <div class="links-list">
            <a href="#" class="link-item">Esteh SEJAGAD (Semangat Jaga Dunia)</a>
            <a href="#" class="link-item">Esteh Newsletter</a>
            <a href="#" class="link-item">Esteh News</a>
            <a href="#" class="link-item">Customer Service 1</a>
            <a href="#" class="link-item">Customer Service 2</a>
        </div>
    </div>

</body>
</html>
