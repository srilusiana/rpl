@include('home.navbar')
    <!-- Main Content Section -->
    <div class="container">
        <h2>KONSULTASI DOKTER</h2>
        <table>
            <thead>
                <tr>
                    <th>TANGGAL</th>
                    <th>NAMA WALI</th>
                    <th>NAMA ANAK</th>
                    <th>TOPIK KONSULTASI</th>
                    <th>STATUS KONSULTASI</th>
                    <th>ALAMAT</th>
                </tr>
            </thead>
            <tbody>
                <td><input type="date"></td>
                    <td><input type="text" placeholder="Nama Wali"></td>
                    <td><input type="text" placeholder="Nama Anak"></td>
                    <td><input type="text" placeholder="Topik"></td>
                    <td>
                        <div class="status-buttons">
                            <button class="btn-approve">Terima</button>
                            <button class="btn-reject">Tolak</button>
                        </div>
                    </td>
                    <td><input type="text" placeholder="Alamat"></td>
                </tr>
            </tbody>
        </table>
    </div>
    @include('home.footer')
