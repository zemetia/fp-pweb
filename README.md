# fp-pweb

## Database

1. Users

- id
- name
- balance
- photo_profile
- created_at

2. Wallets

- id (Token)
- name
- description
- creator_id
- balance
- created_at
- update_at

3. UserOnWallets

- id
- wallet_id
- user_id
- created_at

4. Mutasi

- id
- type (user/wallet)
- uow_id (user or wallet ID)
- log
- amount
- created_at
