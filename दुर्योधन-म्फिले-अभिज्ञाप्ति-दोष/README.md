दुर्योधन-म्फिले-अभिज्ञाप्ति-दोष
=
Points: 15
Difficulty: Medium

Duryodhana's website allows users to include external files. Infiltrate Duryodhana's server and find the stolen battle plans. But be careful, the server is heavily guarded and you will need to use all of your skills to avoid detection.

CTF flag format: CTF-Chakravyuha-{CTFrancomflagvalue}

Duryodhana's server: http://server1.chakravyuh.in:9005

Duryodhana's server mirror link : http://server2.chakravyuh.in:9005


![Problem Image](https://github.com/hetsonii/NSConclave-CTF-2024/assets/75877010/70fd43af-62d8-424d-8c1f-d299c25dec6f)


## Solution

- I first started a local ngrok server and hosted local php files that read given directories or files.
From the description we know that the server is vulnerable to Remote File Inclusion. So I tried to include my local server's php files


- Reading /root gave following output

![Output](https://github.com/hetsonii/NSConclave-CTF-2024/assets/75877010/82e82382-545b-4cef-8b26-70d121243fd5)


- Reading the flag file gave me the final flag

![Flag Image](https://github.com/hetsonii/NSConclave-CTF-2024/assets/75877010/f54617df-1fc0-472c-9d68-ceddcee806cc)

