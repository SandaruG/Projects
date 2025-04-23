using UnityEngine;

public class CameraFollow : MonoBehaviour
{
    [SerializeField] private Transform player; // Root object to follow
    [SerializeField] private float trailDistance = 2f;
    [SerializeField] private float heightOffset = 2f;
    [SerializeField] private float cameraDelay = 0.2f;

    private void LateUpdate()
    {
        if (player != null)
        {
            // Calculate the target position for the camera
            Vector3 followPos = player.position - player.forward * trailDistance;
            followPos.y += heightOffset;

            // Smoothly interpolate camera position
            transform.position = Vector3.Lerp(transform.position, followPos, cameraDelay);

            // Make the camera look at the player
            transform.LookAt(player);
        }
    }
}
