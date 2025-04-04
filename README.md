# Instructions for using this repo
## Initial Setup (When you don't have the GitHub Repo yet)
### Step 1: Clone the Repository
```bash
git clone repository-url
```
### Step 2: Check Available Branches
```bash
git branch -a # Displays all available branches
```
### Step 3: Swith to the Desired Branch
- If the branch exists locally:
  ```bash
  git checkout branch-name # Moves to the desired branch
  ```
- If the branch only exists remotely:
  ```bash
  git checkout -b branch-name origin/branch-name # Create a local branch base on the remote branch
  ```
Now you can make changes to the project.
## Implementing Featues, Fixing Bugs, and More
Before implementing features, fixing bugs, or performing other tasks, **always create a dedicated branch** by following these steps:
### Step 1: Move to the base branch
- If the task is **frontend-related**, move to the frontend branch.
- If the task is **backend-related**, move to the backend branch.

*(Refer to **Step 3** in the **Initial Setup** section for guidance.)*

>[!IMPORTANT]
>PLEASE MAKE SURE THAT YOU HAVE DONE THIS STEP CORRECTLY TO MINIMIZE CONFLICTS

### Step 2: Check if you are now in the right branch
- Confirm you’re on the correct base branch by running:
  ```bash
  git status
  ```
- If you’re on the right branch, proceed to Step 3.

### Step 3: Create a branch
```bash
git checkout -b branch name
```

### Step 4: Check if you're in the branch that you have created
```bash
git status
```
>[!IMPORTANT]
>For task branches, follow this format: "type"/"short-description"
>Ex. If you’re implementing the login page frontend, name your branch: feature/login-frontend

## Saving & Uploading Your Changes
### Step 1: Verify Current Branch
```bash
git status  # To check if you're on the correct branch
```
### Step 2: Stage Your Changes
```bash
git add .  # Stages all changes (or specify files instead of `.`)
```
### Step 3: Commit Your Changes
- Short commit message:
  ```bash
  git commit -m "Your commit message"
  ```
- Long commit message (opens default editor):
  ```bash
  git commit
  ```
### Step 4: Push to Remote Repository
```bash
git push origin branch-name
```
### Step 5: Create a Pull Request (PR) on GitHub
1. Go to the repository on GitHub.
2. Click "Pull Requests" → "New Pull Request".
3. Set:
   - Base branch: The branch you want to merge into (e.g., main, frontend).
   - Compare branch: Your pushed branch.
4. Click "Create Pull Request", add a title & description, then submit.
5. Resolve conflicts (if any) before merging.
6. delete the branch after merging if not base branch.
### Step 6: Delete the branch locally
Move to base branch first (ex. Frontend)
```bash
git branch -d branch name
```
> [!WARNING]
> If You're Creating a PR to merge base branch to another DO NOT DELETE THE BRANCH AFTER MERGING

## Pulling Updates from Remote
### Step 1: Fetch Latest Changes
```bash
git fetch --all
```
### Step 2: Ensure You're on the Correct Branch
```bash
git status  # Check current branch
```
- If not on the right branch:
  ```bash
  git checkout branch-name
  ```
### Step 3: Pull Remote Changes
```bash
git pull  # Updates your local branch with remote changes
```

