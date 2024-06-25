# Gunakan base image dari fauria/vsftpd
FROM fauria/vsftpd

# Copykan file konfigurasi vsftpd.conf ke dalam container
COPY vsftpd.conf /etc/vsftpd/vsftpd.conf

# Contoh penambahan pengguna www-data di Dockerfile
# RUN useradd -m -d /home/www-data -s /bin/bash www-data
# RUN chown -R www-data:www-data /home/vsftpd/dataku.my.id

# Tambahkan perintah untuk menjalankan vsftpd dengan konfigurasi yang diberikan
CMD ["vsftpd", "/etc/vsftpd/vsftpd.conf"]