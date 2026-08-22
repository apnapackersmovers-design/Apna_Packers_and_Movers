import ftplib
import os
import sys

# Get credentials from environment variables (set by GitHub Secrets)
ftp_server = os.environ.get("FTP_SERVER")
ftp_user = os.environ.get("FTP_USERNAME")
ftp_pass = os.environ.get("FTP_PASSWORD")

if not ftp_server or not ftp_user or not ftp_pass:
    print("ERROR: Missing FTP credentials in environment variables.")
    sys.exit(1)

base_dir = os.getcwd()

# Dynamically discover all HTML, PHP, TXT, XML, and GSC validation files in the root directory
files_to_upload = []
for file in os.listdir(base_dir):
    if os.path.isfile(os.path.join(base_dir, file)):
        # Include all php, html, txt, xml files, and ignore git/system config files
        if (file.endswith(('.php', '.html', '.txt', '.xml')) and not file.startswith('.')) or file == '.htaccess':
            files_to_upload.append(file)

print(f"Discovered {len(files_to_upload)} files to deploy: {files_to_upload}")

try:
    print(f"Connecting to FTP Server: {ftp_server}...")
    ftp = ftplib.FTP(ftp_server)
    ftp.login(ftp_user, ftp_pass)
    print("FTP Login Successful!")
    
    # Change directory
    ftp.cwd("public_html")
    print("Changed directory to public_html")
    
    failed_uploads = 0
    for filename in files_to_upload:
        local_file = os.path.join(base_dir, filename)
        print(f"Uploading {filename}...")
        try:
            with open(local_file, "rb") as f:
                ftp.storbinary(f"STOR {filename}", f)
            print(f"  SUCCESS: {filename}")
        except Exception as e:
            print(f"  FAILED to upload {filename}: {e}")
            failed_uploads += 1
            
    ftp.quit()
    print("FTP transfer complete.")
    
    if failed_uploads > 0:
        print(f"WARNING: {failed_uploads} files failed to upload.")
        sys.exit(1)
        
except Exception as e:
    print(f"FTP Deployment Error: {e}")
    sys.exit(1)
