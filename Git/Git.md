# Usefull Command
- List Branch:
  ```
  git branch -a
  ```

# GitFlow

## Feature Branch

- **Create from Dev**
- **Merge into Dev**
- **Name: MyFeature**

### Creation
```
git checkout -b myFeature develop
```

### Atomic Commit
- Pour chaque modification (la plus petit possible)
```
git commit -m "resume"
```

### Merge
```
git checkout develop
git merge --no-ff myFeature
git branch -d myFeature
(git push origin develop)
```

## Release Branch

- **Create from Dev**
- **Merge into Dev and Master**
- **Name: release-x**

### Creation
```
git checkout -b release-x develop
```

### Atomic Commit
- Pour chaque modification (la plus petit possible)
```
git commit -m "resume"
```

### Merge
```
git checkout master
git merge --no-ff release-x
git tag -a x
(git push origin master)
git checkout develop
git merge --no-ff release-x
git branch -d release-x
(git push origin master)
```

## Hotfixe Branch

- **Create from Master**
- **Merge into Dev and Master**
- **Name: hotfix-x**

### Creation
```
git checkout -b hotfix-x master
```

### Atomic Commit
- Pour chaque modification (la plus petit possible)
```
git commit -m "resume"
```

### Merge
```
git checkout master
git merge --no-ff hotfix-x
git tag -a x
(git push origin master)
git checkout develop
git merge --no-ff hotfix-x
git branch -d hotfix-x
(git push origin master)
```