<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #fbd3c0, #f8a77f); /* Peach gradient */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .profile-card {
            background: #fff;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
            text-align: center;
            width: 330px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: fadeIn 0.9s ease-in-out;
        }
        .profile-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 28px rgba(0,0,0,0.3);
        }
        .avatar {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            margin: 0 auto 20px;
            overflow: hidden;
            border: 4px solid #f8a77f; /* Peach border */
            box-shadow: 0 4px 12px rgba(0,0,0,0.25);
        }
        .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .info-box {
            background: #fff6f2; /* soft peach background */
            padding: 14px;
            border-radius: 10px;
            margin: 12px 0;
            font-size: 16px;
            font-weight: 600;
            color: #333;
            border: 2px solid #f8a77f; /* frame tebal peach */
        }
        .label {
            display: block;
            font-size: 12px;
            color: #777;
            margin-bottom: 6px;
            font-weight: normal;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Animasi */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="profile-card">
        <!-- Avatar -->
        <div class="avatar">
            <img src="{{ asset($foto ?? 'default.png') }}" alt="Foto Profil">
        </div>

        <!-- Info -->
        <div class="info-box">
            <span class="label">Nama</span>
            {{ $nama }}
        </div>
        <div class="info-box">
            <span class="label">Kelas</span>
            {{ $kelas }}
        </div>
        <div class="info-box">
            <span class="label">NPM</span>
            {{ $npm }}
        </div>
    </div>
</body>
</html>
