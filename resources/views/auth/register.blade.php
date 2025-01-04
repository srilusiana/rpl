@include('home.navbar')
<style>
            .register-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
            padding: 40px 20px;
        }

        .register-box {
            background-color: #fff;
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        .register-box h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .register-box form {
            margin: 20px 0;
        }

        .register-box label {
            display: block;
            text-align: left;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .register-box input[type="text"],
        .register-box input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            box-sizing: border-box;
        }

        .register-box .radio-group {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }

        .register-box .radio-group label {
            font-size: 14px;
        }

        .register-box .form-buttons {
            display: flex;
            justify-content: space-between;
        }

        .register-box button {
            padding: 10px 20px;
            background-color: #009688;
            border: none;
            color: #fff;
            font-size: 15px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
        }

        .register-box button:hover {
            background-color: #00796b;
        }
</style>

<div class="register-container">
    <div class="register-box">
        <h2>Registrasi Akun</h2>
        <form>
            <div class="radio-group">
                <label><input type="radio" name="role" value="Pengguna"> Pengguna</label>
                <label><input type="radio" name="role" value="Dokter Anak"> Dokter Anak</label>
            </div>

            <label for="name">Nama Lengkap *</label>
            <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap">

            <div class="form-buttons">
                <button type="button">Kembali</button>
                <button type="submit">Next</button>
            </div>
        </form>
    </div>
</div>

@include('home.footer')