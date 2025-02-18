import { test, expect } from '@playwright/test';

test('test', async ({ page }) => {
  await page.goto('http://primo.test/admin/login');
  await page.getByRole('textbox', { name: 'Email address*' }).click();
  await page.getByRole('textbox', { name: 'Email address*' }).fill('super-admin@primo.com');
  await page.getByRole('textbox', { name: 'Password*' }).click();
  await page.getByRole('textbox', { name: 'Password*' }).fill('password');
  await page.getByRole('checkbox', { name: 'Remember me' }).check();
  await page.getByRole('button', { name: 'Sign in' }).click();
  await page.getByRole('button', { name: 'User menu' }).click();
  await page.getByRole('button', { name: 'Sign out' }).click();
});