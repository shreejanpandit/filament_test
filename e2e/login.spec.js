import { test, expect } from '@playwright/test';

test('Valid Login', async function ({ page }) {
    await page.goto('http://primo.test/admin/login');
    await page.locator("input[id='data.email']").fill('super-admin@primo.com', { delay: 200 })
    await page.locator("input[id='data.password']").fill('password', { delay: 100 })
    await page.locator("//button[@type='submit']").click()
    await expect(page).toHaveURL('http://primo.test/admin')

    await page.locator("//img[contains(@alt, 'Avatar of')]").click()
    await page.getByText('Sign out').click()

    await page.waitForTimeout(3000)
    await expect(page).toHaveURL('http://primo.test/admin/login')

});














// test('Valid error Login', async function ({ page }) {
//     await page.goto('http://primo.test/admin/login');
//     await page.locator("input[id='data.email']").fill('super-admin@primo.co', { delay: 200 })
//     await page.locator("input[id='data.password']").fill('password123', { delay: 100 })
//     await page.locator("//button[@type='submit']").click()
//     await page.waitForTimeout(3000)
//     const errorMessage = await page.locator("//p[contains(@class, 'fi-fo-field-wrp-error-message')]").textContent()
//     await expect(errorMessage.includes('These credentials do not match')).toBeTruthy()

// });