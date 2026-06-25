#!/bin/bash
# StarTechNow — Push WordPress Theme to GitHub
# Run this script from inside the startechnow-theme folder

echo "======================================"
echo "  StarTechNow GitHub Deploy Script"
echo "======================================"

# Step 1: Initialize git repo
git init

# Step 2: Add all files
git add .

# Step 3: Commit
git commit -m "Initial commit: StarTechNow WordPress theme"

# Step 4: Rename branch to main
git branch -M main

# Step 5: Add remote origin
git remote add origin https://github.com/ahmedpanhwar14-star/Website.git

# Step 6: Push
git push -u origin main

echo ""
echo "✅ Done! Visit your repo at:"
echo "   https://github.com/ahmedpanhwar14-star/Website"
