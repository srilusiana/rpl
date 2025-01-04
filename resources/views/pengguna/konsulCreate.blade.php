@include('home.navbar')
<style>
    /* Form Styles */
    .container {
            margin: 20px auto;
            max-width: 800px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px 30px;
        }

        .container h2 {
            font-size: 1.5rem;
            color: #002855;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .form-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .form-group label {
            font-size: 1rem;
            color: #333;
            margin-right: 20px;
            width: 30%;
        }

        .form-group input,
        .form-group select {
            flex: 1;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        button {
            padding: 10px 20px;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-cancel {
            background-color: #6c757d;
            color: white;
        }

        .btn-cancel:hover {
            background-color: #5a6268;
        }

        .btn-submit {
            background-color: #002855;
            color: white;
        }

        .btn-submit:hover {
            background-color: #001d3d;
        }
</style>
    <!-- Form Section -->
    <div class="container">
        <h2>Form Mengajukan Konsultasi</h2>
        <form action="konsulta pengunal.html" method="post">
            <div class="form-group">
                <label for="nama-anak">Nama Anak</label>
                <input type="text" id="nama-anak" name="nama_anak" placeholder="Nama Anak" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" id="alamat" name="alamat" placeholder="Alamat" required>
            </div>
            <div class="form-group">
                <label for="topik">Topik Konsultasi</label>
                <input type="text" id="topik" name="topik" placeholder="Topik Konsultasi" required>
            </div>
            <div class="form-group">
                <label for="jam-konsultasi">Jam Konsultasi</label>
                <select id="jam-konsultasi" name="jam_konsultasi" required>
                    <option value="">Pilih Jam Konsultasi</option>
                    <option value="09:00">09:00</option>
                    <option value="10:00">10:00</option>
                    <option value="11:00">11:00</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" id="tanggal" name="tanggal" required>
            </div>
            <div class="form-actions">
                <button type="button" class="btn-cancel">Batal</button>
                <button type="submit" class="btn-submit">Kirim</button>
            </div>
        </form>
    </div>
    @include('home.footer')