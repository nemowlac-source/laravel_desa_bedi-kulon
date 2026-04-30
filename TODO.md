# TODO: Logic Tampil Dashboard Wisata (Satu Saja)

- [x]   1. Baca semua file relevan (WisataController, Model, View create/edit/index, Migration)
- [x]   2. Edit `app/Http/Controllers/Admin/WisataController.php`:
    - `create()` - kirim `$existingDashboardWisata` ke view ✅
    - `edit()` - kirim `$existingDashboardWisata` ke view (exclude current ID) ✅
    - `store()` - validasi block `tampil_dashboard=true` jika sudah ada record lain ✅
    - `update()` - validasi block `tampil_dashboard=true` jika sudah ada record lain ✅
- [x]   3. Edit `resources/views/admin/wisata/create.blade.php`:
    - Disable checkbox + pesan peringatan jika sudah ada wisata lain yang aktif ✅
    - Session error handling ✅
- [x]   4. Edit `resources/views/admin/wisata/edit.blade.php`:
    - Disable checkbox jika wisata lain yang aktif ✅
    - Enable checkbox jika current wisata yang aktif (bisa dimatikan) ✅
    - Session error handling ✅
- [x]   5. Edit `resources/views/admin/wisata/index.blade.php`:
    - Fix struktur grid card (nested div benar) ✅
    - Fix tombol hapus (hidden form, bukan nested form) ✅
- [x]   6. Testing & verifikasi
