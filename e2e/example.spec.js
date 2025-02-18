import { test, expect } from '@playwright/test';

test('My first test', async ({ page }) => expect(true).toBeTruthy());
test('My second test', async ({ page }) => expect('shreejan'.includes('shree1')).toBeFalsy());