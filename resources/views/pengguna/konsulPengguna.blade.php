@include('home.navbar')
<style>
    /* Content Styles */
    .container {
            padding: 15px;
            text-align: center;
        }
        .container h2 {
            color: white;
            font-size: 2rem;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        table, th, td {
            border: 5px solid #ddd;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .btn {
            margin-top: 30px;
            padding: 10px 20px;
            background-color: #004aad;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #003580;
        }
        input {
            width: 150pxpx;
            height: 30px;
        }
</style>
    <!-- Main Content Section -->
    <div class="container">
        <h2>Konsultasi Pengguna</h2>
        <table>
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Nama Wali</th>
                    <th>Nama Anak</th>
                    <th>Topik Konsultasi</th>
                    <th>Status Konsultasi</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="date"></td>
                    <td><input type="text" placeholder="Nama Wali"></td>
                    <td><input type="text" placeholder="Nama Anak"></td>
                    <td><input type="text" placeholder="Topik"></td>
                    <td>
                        <select>
                            <option value="Pending">Pending</option>
                            <option value="Completed">Completed</option>
                        </select>
                    </td>
                    <td><input type="text" placeholder="Alamat"></td>
                </tr>
            </tbody>
        </table>
        <a class="btn" href="{{ route('konsulCreate') }}">
        Konsultasi
        </a>
    </div>
    @include('home.footer')