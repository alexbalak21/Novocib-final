# Local Development Testing Guide

This document provides testing instructions and test cases for the Novocib website running on your local development environment.

## Base URL
- [http://localhost:3000/](http://localhost:3000/)

## Prerequisites
- Local web server running (e.g., Apache, Nginx)
- PHP installed (version 7.4 or higher recommended)
- All dependencies installed via Composer (if any)
- Database connection properly configured (if applicable)

## Testing the Router

### Test Cases

#### 1. Home Page
- [Home Page](http://localhost:3000/)
- [Home with trailing slash](http://localhost:3000/)

#### 2. Contact Page
- [Contact Page](http://localhost:3000/contact)
- [Alternative Contact URL](http://localhost:3000/contact-us)

#### 3. Product Pages
- [All Products](http://localhost:3000/products)
- [Active Purified Enzymes](http://localhost:3000/active-purified-enzymes)
- [IMPDH Recombinant Enzyme](http://localhost:3000/active-purified-enzymes/impdh-recombinant-enzyme)
- [HPRT Assay Kit](http://localhost:3000/convenient-assay-kits/hprt-assay-kit)
- [PRPP-S Assay Kit](http://localhost:3000/convenient-assay-kits/prpp-s-assay-kit)

#### 4. Services
- [Main Services](http://localhost:3000/services)
- [Analytical Services](http://localhost:3000/analytical-services)
- [Yeast Extract Analysis](http://localhost:3000/yeast-extract-nucleotide-analysis)

#### 5. Nucleotides
- [Nucleotides Main](http://localhost:3000/nucleotides)
- [HPLC Analysis](http://localhost:3000/hplc-analysis-of-bases-nucleosides)

#### 6. 404 Handling
- [Non-existent Page](http://localhost:3000/non-existent-page) (should show 404)

### Edge Cases

1. **Trailing Slash**
   - [Contact with trailing slash](http://localhost:3000/contact/)

2. **Case Sensitivity**
   - [Uppercase Contact](http://localhost:3000/CONTACT) (should redirect to lowercase)

3. **Multiple Slashes**
   - [Multiple slashes](http://localhost:3000//contact) (should normalize)

4. **Query Parameters**
   - [Search with query](http://localhost:3000/search?q=test)
   - [Contact with params](http://localhost:3000/contact?source=test)

## Security Testing

1. **Directory Listing**
   - [App Directory](http://localhost:3000/app/) (should return 403)
   - [Views Directory](http://localhost:3000/app/views/) (should be blocked)

2. **Sensitive Files**
   - [.env](http://localhost:3000/.env) (should be blocked)
   - [.git](http://localhost:3000/.git) (should be blocked)

## Additional Notes
- Clear browser cache between tests if making CSS/JS changes
- Test with browser extensions disabled to rule out conflicts
- Check server error logs for any PHP errors

## Reporting Issues
When reporting issues, please include:
1. URL that caused the issue
2. Steps to reproduce
3. Expected behavior
4. Actual behavior
5. Browser and version
6. Any error messages from console

---
Last updated: July 16, 2025