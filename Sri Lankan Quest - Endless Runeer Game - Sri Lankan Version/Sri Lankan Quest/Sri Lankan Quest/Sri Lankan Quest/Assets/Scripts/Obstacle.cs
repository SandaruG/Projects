using UnityEngine;

public class Obstacle : MonoBehaviour
{
    private PlayerMovement playerMovement;

    private void Start()
    {
        // Use the new method to find the PlayerMovement component
        playerMovement = Object.FindFirstObjectByType<PlayerMovement>();
    }

    private void OnCollisionEnter(Collision collision)
    {
        if (collision.gameObject.name == "Player")
        {
            // Kill the player
            playerMovement.Die();
        }
    }

    private void Update()
    {
        // Optional: Add any logic here if needed
    }
}
