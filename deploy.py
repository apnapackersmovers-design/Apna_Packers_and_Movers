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

# Base directory is current workspace
base_dir = os.getcwd()

# List of files to upload
files_to_upload = [
    "index.php",
    "packers-and-movers-in-indore-about.php",
    "packers-and-movers-in-indore-blogs.php",
    "packers-and-movers-in-indore-branch.php",
    "packers-and-movers-in-indore-car-parking.php",
    "packers-and-movers-in-indore-contact.php",
    "packers-and-movers-in-indore-insurence.php",
    "packers-and-movers-in-indore-loading.php",
    "packers-and-movers-in-indore-parking.php",
    "packers-and-movers-in-indore-process.php",
    "packers-and-movers-in-indore-relocation.php",
    "packers-and-movers-in-indore-warehouse.php",
    "robots.txt",
    "sitemap.xml",
    "google8fc39c4a82707a75.html"
]

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
        if not os.path.exists(local_file):
            print(f"Skipping (not found locally): {filename}")
            continue
            
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
