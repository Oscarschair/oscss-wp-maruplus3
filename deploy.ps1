# deploy.ps1
# Automated deploy script using SSH Key auth (Remote PULL only)

Write-Host "--- Remote SSH PULL (via Key Auth) ---" -ForegroundColor Cyan

# Load .env.deploy
if (-Not (Test-Path ".env.deploy")) {
    Write-Host "Error: .env.deploy not found." -ForegroundColor Red
    exit 1
}

$envData = @{}
Get-Content ".env.deploy" | ForEach-Object {
    $line = $_.Trim()
    if ($line -match "^[^#].+=.*$") {
        $parts = $line.Split("=", 2)
        if ($parts.Length -eq 2) {
            $key = $parts[0].Trim(); $val = $parts[1].Trim()
            $envData.$key = $val
        }
    }
}

$u = $envData.SSH_USER
$h = $envData.SSH_HOST
$d = $envData.DEPLOY_DIR
$p = $envData.SSH_PORT

if (-not ($u -and $h -and $p -and $d)) {
    Write-Host "Error: .env.deploy missing config." -ForegroundColor Red
    exit 1
}

Write-Host "Connecting to $h via SSH and running git pull..." -ForegroundColor Cyan

# Execute SSH pull directly using SSH Key (No password needed)
ssh -p $p -o BatchMode=yes "$u@$h" "cd $d && git pull origin main && cp llms.txt ../../../"

if ($LASTEXITCODE -eq 0) {
    Write-Host "`n--------------------------------------------------------" -ForegroundColor Cyan
    Write-Host "Success: Remote git pull completed successfully!" -ForegroundColor Green
    Write-Host "--------------------------------------------------------" -ForegroundColor Cyan
}
else {
    Write-Host "`nError: SSH command failed. Please ensure your SSH key is accepted." -ForegroundColor Red
}
